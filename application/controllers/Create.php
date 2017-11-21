<?php

class Create extends CI_Controller
{
    private $uploadPath ='./uploads/images/';
    private $uploadSmallPath = './uploads/images/small/';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('database');
    }

    public function index()
    {
        if(!isset($_SESSION['logged_in']))
        {
            if(isset($_SERVER['HTTP_REFERRER']))
                redirect($_SERVER['HTTP_REFERRER']);
            else
                redirect(base_url());
        }
        $data['title'] = 'Barahlo.by';
        $data['categories'] = $this->database->selectAll('categories');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/createAdvert', $data);
        $this->load->view('templates/footer');
    }

    public function validate()
    {
        $data['title'] = 'Barahlo.by';
        $this->load->view('templates/header', $data);

//        Title
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[2]|max_length[50]',
            array(  'required' => 'Пожалуйста укажите заголовок',
                'min_length' => 'Заголовок должен содержать минимум {param} символа.',
                'max_length' => 'Заголовок должен содержать максимум {param} символов.'));
//        Description
        $this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[2]|max_length[5000]',
            array(  'required' => 'Пожалуйста укажите описание.',
                'min_length' => 'Описание должно содержать минимум {param} символов.',
                'max_length' => 'Описание может содержать максимум {param} символов.'));
//        Price
        $this->form_validation->set_rules('price', 'Price Confirmation', 'trim|numeric',
            array(  'numeric' => 'Цена должна быть указана цифрами.'));
//        Category
        $this->form_validation->set_rules('id_cat', 'Id_cat', 'trim|required',
            array(  'required' => 'Пожалуйста выберите категорию.'));
//        Selling options
        $this->form_validation->set_rules('sellingOptions', 'SellingOptions', 'trim|required',
            array(  'required' => 'Пожалуйста выберите тип сделки.'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('pages/createAdvert');
        }
        else
        {
//            $this->database->insertData($this->input->post(null, true), 'user');
//            $data['files'] = $this->upload_img();
            var_dump($this->upload_img());
            echo count($_FILES['userFiles']['name']);
//            $this->load->view('pages/advert_success', $data);

        }

        $this->load->view('templates/footer');
    }

    //refactor this function!!!
    public function upload_img()
    {
        if(!empty($_FILES['userFiles']['name']))
        {
            $imagesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $imagesCount; $i++)
            {
                $error = false;

                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $config = $this->getUploadConfig($this->uploadPath);

                $this->load->library('upload');
                $this->upload->initialize($config);

                if(!$this->upload->do_upload('userFile'))
                {
//                    $error = true;
                    return false;
                }
                else
                {
                    $imageData = $this->upload->data();

                    //resize normal size
                    $configNormalSize = $this->getNormalSizeConfig($imageData);

                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configNormalSize);
                    if (!$this->image_lib->resize())
                    {
                        $error = true;
                    }
                    else
                    {
                        $uploadImage[$i]['large_name'] = $imageData['file_name'];
                    }
                    $this->image_lib->clear();

                    //resize small size
                    $configSmallSize = $this->getSmallImageConfig($this->uploadSmallPath, $imageData);
                    
                    $this->image_lib->initialize($configSmallSize);
                    if (!$this->image_lib->resize())
                    {
                        $error = true;
                    }
                    else
                    {
                        $uploadImage[$i]['small_name'] = $imageData['file_name'];
                    }
                    $this->image_lib->clear();

                    //delete images is error
                    if ($error) {
                        $file = $this->uploadPath . $imageData['file_name'];
                        if (file_exists($file)) {
                            unlink($file);
                        }
                        $file = $this->uploadSmallPath . $imageData['file_name'];
                        if (file_exists($file)) {
                            unlink($file);
                        }
                    }
                }
            }
            if(!empty($uploadImage))
            {
                return $uploadImage;
            }
        }
        return false;
    }
     private function getUploadConfig($uploadPath)
     {
         $config['upload_path'] = $uploadPath;
         $config['allowed_types'] = 'jpeg|jpg|png';
         $config['max_size'] = '5120';//kb
         $config['remove_spaces'] = TRUE;
         $config['encrypt_name'] = TRUE;

         return $config;
     }
     private function getNormalSizeConfig(array $imageData)
     {
         $config['image_library'] = 'gd2';
         $config['source_image'] = $imageData['full_path']; //get original image
         $config['maintain_ratio'] = TRUE;
         $config['width'] = 1280;
         $config['height'] = 720;

         return $config;
     }
     private function getSmallImageConfig($uploadSmallPath ,array $imageData)
     {
         $config['image_library']   = 'gd2';
         $config['source_image']    = $imageData['full_path'];
         $config['maintain_ratio']  = TRUE;
         $config['width']           = 260;
         $config['height']          = 125;
         $config['new_image']   = $uploadSmallPath;

         return $config;
     }
}
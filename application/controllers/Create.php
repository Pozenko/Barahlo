<?php

class Create extends CI_Controller
{
    private $uploadPath ='./uploads/images/';
    private $uploadSmallPath = './uploads/images/small/';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->library('image_lib');

        $this->load->model('database');
        $this->load->model('advert');
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
            $setData = $this->input->post(null, true);

            $setData['images'] = $this->upload_img();

            $this->database->insertData('advert', $setData);

            $this->load->view('pages/advert_success', $data);
        }

        $this->load->view('templates/footer');
    }

    //refactor this function!!!
    public function upload_img()
    {
        $files = $_FILES;
        $imagesCount = count($_FILES['userFiles']['name']);
        $this->load->library('image_lib');

        for($i = 0; $i < $imagesCount; $i++)
        {
            $error = false;

            $_FILES['userFiles']['name'] = $files['userFiles']['name'][$i];
            $_FILES['userFiles']['type'] = $files['userFiles']['type'][$i];
            $_FILES['userFiles']['tmp_name'] = $files['userFiles']['tmp_name'][$i];
            $_FILES['userFiles']['error'] = $files['userFiles']['error'][$i];
            $_FILES['userFiles']['size'] = $files['userFiles']['size'][$i];

            $this->upload->initialize($this->getUploadConfig());
            if(!$this->upload->do_upload('userFiles'))
            {
                return false;
            }
            else
            {
                $imagesData = $this->upload->data();

                //normal resize
                $this->image_lib->initialize($this->getNormalSizeConfig($imagesData));
                if (!$this->image_lib->resize())
                    $error = true;
                else
                    $uploadImage[$i]['large'] = $imagesData['file_name'];
                $this->image_lib->clear();

                //small resize
                $this->image_lib->initialize($this->getSmallImageConfig($imagesData));
                if (!$this->image_lib->resize())
                    $error = true;
                else
                    $uploadImage[$i]['small'] = $imagesData['file_name'];
                $this->image_lib->clear();

                if ($error) {
                    $file = $this->uploadPath . $imagesData['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                    $file = $this->uploadSmallPath . $imagesData['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            }
        }
        return isset($uploadImage) ? $uploadImage : false;
    }

    //configs
    private function getUploadConfig()
    {
//        $config = array();
        $config['upload_path'] = $this->uploadPath;
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '5120';//kb
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE;

        return $config;
    }
    private function getNormalSizeConfig(array $imageData)
    {
        $config = array();
        $config['image_library']   = 'gd2';
        $config['source_image']    = $imageData['full_path']; //get original image
        $config['maintain_ratio']  = TRUE;
        $config['width'] = 1280;
        $config['height'] = 720;

        return $config;
    }
    private function getSmallImageConfig(array $imageData)
    {
        $config = array();
        $config['image_library']   = 'gd2';
        $config['source_image']    = $imageData['full_path'];
        $config['maintain_ratio']  = TRUE;
        $config['width']           = 230;
//        $config['height']          = 125;
        $config['new_image']   = $this->uploadSmallPath;

        return $config;
    }
}
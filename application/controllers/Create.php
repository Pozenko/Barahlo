<?php

class Create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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

        $this->load->view('templates/header', $data);
        $this->load->view('pages/createAdvert');
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

            $this->load->view('pages/advert_success');
        }

        $this->load->view('templates/footer');
    }
}
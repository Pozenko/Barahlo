<?php

class Ad extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('database');
    }

    public function index()
    {
        $data['title'] = 'Barahlo.by';
        $id_adv = $this->input->get('id', true);

        if(isset($id_adv) && is_numeric($id_adv))
        {
            if($tempData = $this->database->selectWhere($id_adv, 'advert'))
            {
                $data['advert'] = $tempData[0];
                if(isset($tempData[1]))
                {
                    $data['image'] = $tempData[1];
                }
                $this->load->view('templates/header', $data);
                $this->load->view('pages/advert', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                redirect(base_url());
            }
        }
        else
        {
            redirect(base_url());
        }
    }
}
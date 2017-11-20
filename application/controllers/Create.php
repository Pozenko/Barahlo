<?php

class Create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

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


}
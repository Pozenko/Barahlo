<?php

class Account extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Barahlo.by';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/account');
        $this->load->view('templates/footer');
    }
}
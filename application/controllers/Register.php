<?php

class Register extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Barahlo.by';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/register_form');
        $this->load->view('templates/footer');
    }
}
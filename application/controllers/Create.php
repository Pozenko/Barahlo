<?php

class Create extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Barahlo.by';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/createAdvert');
        $this->load->view('templates/footer');
    }
}
<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Barahlo.by';

        $this->load->view('templates/header', $data);
        $this->load->view('home/home');
        $this->load->view('templates/footer');
    }
}
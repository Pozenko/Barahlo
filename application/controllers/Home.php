<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('city');
        $data['title'] = 'Barahlo.by';
        $data['cities'] = $this->city->getAllCity();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }
}
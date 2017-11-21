<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('database');
    }

    public function index()
    {
        $data['title'] = 'Barahlo.by';
        $data['cities'] = $this->database->selectAll('cities');
        $data['categories'] = $this->database->selectAll('categories');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }
}
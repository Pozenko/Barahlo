<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        $this->load->helper('url');

        $this->load->model('database');
    }

    public function index()
    {
        $data['title'] = 'Barahlo.by';
        $data['cities'] = $this->database->selectAll('cities');
        $data['categories'] = $this->database->selectAll('categories');

        $this->load->view('templates/header', $data);

        $this->load->model('advert');
        // init params
        $params = array();
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->advert->getCount();

        // load config file
        $this->config->load('pagination', TRUE);
        $settings = $this->config->item('pagination');
        $settings['total_rows'] = $total_records;
        $settings['base_url'] = base_url() . 'home/index';

        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->advert->getCurrentPageRecords($settings['per_page'], $start_index);

            // use the settings to initialize the library
            $this->pagination->initialize($settings);

            // build paging links
            $params["links"] = $this->pagination->create_links();
        }

        $this->load->view('pages/home', $params);

        $this->load->view('templates/footer');
    }
}
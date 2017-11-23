<?php

class Paginator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('advert');
//        $data = $this->advert->getCurrentPageRecords(3, 0);
//        var_dump($data);
        // init params
        $params = array();
        $limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->advert->getCount();

        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->advert->getCurrentPageRecords($limit_per_page, $start_index);

            $config['base_url'] = base_url() . 'paginator/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;

            $this->pagination->initialize($config);

            // build paging links
            $params["links"] = $this->pagination->create_links();
        }

        $this->load->view('user_listing', $params);
    }
}
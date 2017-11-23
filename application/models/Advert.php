<?php

class Advert extends CI_Model
{
    private $advertData = array();
    private $imageData = array();

    private $advertTable = 'advert';
    private $imageTable = 'images';

    public function setData(array $data)
    {
        if(isset($data['images']))
        {
            $this->imageData = $data['images'];
            unset($data['images']);
        }
        $clearData = array_map(function($v) {return trim(strip_tags($v));}, $data);

        $this->advertData['title'] = $clearData['title'];
        $this->advertData['description'] = $clearData['description'];
        if($clearData['price']){ $this->advertData['price'] = abs(intval($clearData['price'])); }
        $this->advertData['selling_options'] = $clearData['sellingOptions'];
        $this->advertData['id_cat'] = $clearData['id_cat'];
        $this->advertData['id_user'] = $_SESSION['id_user'];
        $this->advertData['place_date'] = date('Y-m-d');
    }

    public function insertData()
    {
        $this->db->trans_start();
        $this->db->insert($this->advertTable, $this->advertData);
        if(!empty($this->imageData))
        {
            for($i = 0; $i < count($this->imageData); $i++)
            {
                $this->imageData[$i]['id_advert'] = $this->db->insert_id();
            }
            $this->db->insert_batch($this->imageTable, $this->imageData);
        }
        $this->db->trans_complete();
    }

    public function selectData($email)
    {

    }

    //functions for pagination

    public function getCount()
    {
        return $this->db->count_all($this->advertTable);
    }

    public function getCurrentPageRecords($limit, $start)
    {
        $this->db->select('advert.id_advert, advert.title, advert.price, advert.place_date, advert.selling_options, images.small, categories.name');
        $this->db->from('advert');
        $this->db->join('images', 'images.id_images = advert.id_advert', 'left');
        $this->db->join('categories', 'categories.id_cat = advert.id_cat');
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $data[] = $row;
            }

            return $data;
//            return $query->result_array();
        }

        return false;
    }
}
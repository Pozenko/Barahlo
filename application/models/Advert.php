<?php

class Advert extends CI_Model
{
    private $advertData = array();

    public function setData(array $data)
    {
        $clearData = array_map(function($v) {return trim(strip_tags($v));}, $data);

        $this->advertData['title'] = $clearData['title'];
        $this->advertData['description'] = $clearData['description'];
        if($clearData['price']){$this->advertData['price'] = $clearData['price'];}
        $this->advertData['selling_options'] = $clearData['sellingOptions'];
        $this->advertData['id_cat'] = $clearData['id_cat'];
        $this->advertData['id_user'] = $_SESSION['id_user'];
        $this->advertData['place_date'] = date('Y-m-d');
    }

    public function insertData()
    {

    }

    public function selectData($email)
    {

    }
}
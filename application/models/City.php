<?php

class City extends CI_Model
{

    public function getAllCity()
    {
        $query = $this->db->get('cities');
        return $query->result_array();
    }
}
<?php

class Images extends CI_Model
{
    public function deleteImages(array $result)
    {
        $images = array();

        if (!isset($result))
            return false;

        foreach ($result as $res) {
            $this->db->select('large');
            $this->db->from('images');
            $this->db->where('id_advert', $res['id_advert']);
            $query = $this->db->get();
            $images[] = $query->result_array();
        }

        foreach ($images as $image) {
            foreach ($image as $name) {
                 $name['large'];
            }
        }


    }
}
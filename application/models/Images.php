<?php

class Images extends CI_Model
{
    private $uploadPath ='./uploads/images/';
    private $uploadSmallPath = './uploads/images/small/';

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

            $this->db->where('id_advert', $res['id_advert']);
            $this->db->delete('images');
        }

        foreach ($images as $image) {
            foreach ($image as $name) {
                $file = $this->uploadPath . $name['large'];
                if (file_exists($file)) {
                    unlink($file);
                }
                $file = $this->uploadSmallPath . $name['large'];
                if (file_exists($file)) {
                    unlink($file);
                }
            }
        }

        return true;
    }
}
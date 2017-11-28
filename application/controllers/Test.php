<?php

/**
 * Created by PhpStorm.
 * User: pozenko
 * Date: 27.11.17
 * Time: 19:05
 */
class Test extends CI_Controller
{
    public function index()
    {
        $this->db->select('advert.id_advert, advert.title, advert.price, advert.place_date, advert.selling_options, images.small, categories.name');
        $this->db->from('advert');
        $this->db->join('images', 'images.id_images = advert.id_advert', 'left');
        $this->db->join('categories', 'categories.id_cat = advert.id_cat');
        $this->db->where('advert.id_user', $_SESSION['id_user']);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $data[] = $row;
            }
            return $data;
        }
        return false;


//        $this->db->select('id_advert');
//        $this->db->from('advert');
//        $this->db->where('id_user', $_SESSION['id_user']);
//        $query = $this->db->get();
//        $result = $query->result_array();
//        var_dump($result);
//
//        $this->db->select('large');
//        $this->db->from('images');
//        $this->db->where($result);
//        $query = $this->db->get();
//        $images =  $query->result_array();
//        var_dump($images);



//        for($i = 0; $i < count($result);$i++)
//        {
//            echo $result[$i]['id_advert'];
//        }
//        $images = array();
//        foreach ($result as $res)
//        {
//            $this->db->select('large');
//            $this->db->from('images');
//            $this->db->where('id_advert', $res['id_advert']);
//            $query = $this->db->get();
//            $images[] =  $query->result_array();
//        }
//        foreach($images as $image)
//        {
//            foreach ($image as $name)
//            {
//                $images2[] = $name['large'];
//            }
//        }
//
//        var_dump($images2);
    }
}
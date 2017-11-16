<?php

class Post extends CI_Model
{
    private $userData = array();
    private $advert = array();

    public function getUserData(array $post)
    {
        $clearData = array_map(function($v) {return trim(strip_tags($v));}, $post);

        $this->userData['logUser']['email'] = $clearData['email'];
        $this->userData['logUser']['password'] = password_hash($clearData['password1'], PASSWORD_DEFAULT);

        $this->userData['user']['id_loguser'] = null;
        $this->userData['user']['name'] = $clearData['name'];
        if($clearData['phone']){$this->userData['user']['phone'] = $clearData['phone'];}
        $this->userData['user']['id_cities'] = $clearData['city'];
        $this->userData['user']['reg_date'] = date('Y-m-d');

        return $this->userData;
    }
}
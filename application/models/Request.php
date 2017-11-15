<?php

class Request extends CI_Model
{
    private $user = array();
    private $advert = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function setUserData(array $data)
    {
        $clearData = array_map(function($v) {return trim(strip_tags($v));}, $data);
        $this->user['name'] = $clearData['name'];
        $this->user['email'] = $clearData['email'];
        $this->user['password'] = $clearData['password1'];
        if($clearData['phone']){$this->user['phone'] = $clearData['phone'];}
        $this->user['id_cities'] = $clearData['city'];
    }
    public function getUserData()
    {
        return $this->user;
    }
}
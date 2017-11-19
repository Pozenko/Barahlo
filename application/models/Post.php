<?php

class Post extends CI_Model
{
    private $userData = array();
    private $advertData = array();

    public function getUserData(array $post)
    {
        $clearData = array_map(function($v) {return trim(strip_tags($v));}, $post);
        $options = [
            'salt' => HASH_SALT,
        ];

        $this->userData['logUser']['email'] = $clearData['email'];
        $this->userData['logUser']['password'] = password_hash($post['password1'], PASSWORD_BCRYPT, $options);
        var_dump($this->userData['logUser']['password'] );

        $this->userData['user']['id_loguser'] = null;
        $this->userData['user']['name'] = $clearData['name'];
        if($clearData['phone']){$this->userData['user']['phone'] = $clearData['phone'];}
        $this->userData['user']['id_cities'] = $clearData['city'];
        $this->userData['user']['reg_date'] = date('Y-m-d');

        return $this->userData;
    }
}
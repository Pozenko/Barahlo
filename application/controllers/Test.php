<?php

class Test extends CI_Controller
{
    public function index()
    {
        $pas = "111111";

        $options = [
//            'cost' => 11,
            'salt' => HASH_SALT,
        ];
        $hash = password_hash($pas, PASSWORD_BCRYPT, $options);
        echo $hash;
        echo '<br>';
        echo '$2y$10$dn3281y1hdnh18o247612uW4Jvof0rmjyGvBOfaxsdWfzLRnQKiSe';

        if(password_verify($pas, $hash))
        {
            echo 'ok';
        }
        else{
            echo 'bad';
        }
    }
}
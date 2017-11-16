<?php

class User extends CI_Model
{
//    user data
    private $user = array();
    private $logUser = array();

    public function setUserData(array $data, $model_name)
    {
          $this->load->model(strtolower ($model_name) , 'model');
          $userData = $this->model->getUserData($data);
          $this->user = $userData['user'];
          $this->logUser = $userData['logUser'];
    }

    public function getUser()
    {
        return $this->user;
    }
    public function getLoginUser()
    {
        return $this->logUser;
    }
    public function setLogUserId($id)
    {
        $this->user['id_loguser'] = $id;
    }
}
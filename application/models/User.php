<?php

class User extends CI_Model
{
    private $userData = array();
    private $userTable = 'user';
    private $logUserTable = 'login_user';

    public function setData(array $data)
    {
        $clearData = array_map(function($v) {return trim(strip_tags($v));}, $data);

        $this->userData['logUser']['email'] = $clearData['email'];
        $this->userData['logUser']['password'] = password_hash($data['password1'], PASSWORD_BCRYPT);
        $this->userData['user']['id_loguser'] = null;
        $this->userData['user']['name'] = $clearData['name'];
        if($clearData['phone']){$this->userData['user']['phone'] = $clearData['phone'];}
        $this->userData['user']['id_cities'] = $clearData['city'];
        $this->userData['user']['reg_date'] = date('Y-m-d');
    }

    public function insertData()
    {
        $this->db->trans_start();
        $this->db->insert($this->logUserTable, $this->userData['logUser']);
        $this->userData['user']['id_loguser'] = $this->db->insert_id();
        $this->db->insert($this->userTable, $this->userData['user']);
        $this->db->trans_complete();
    }

    public function selectData($email)
    {
        $this->db->select('login_user.email, login_user.password, user.name, user.id_user');
        $this->db->from('login_user');
        $this->db->join('user', 'login_user.id_loguser = user.id_loguser');
        $this->db->where('login_user.email', trim(strip_tags($email)));
        $query = $this->db->get();

        return $query->result_array();
    }

    public function updateData(array $updateData)
    {
        $this->db->set($updateData);
        $this->db->where('id_user', $_SESSION['id_user']);
        $this->db->update($this->userTable);
    }

    public function selectAccountData()
    {
        $this->db->select('user.name, user.phone, user.id_cities ,login_user.email');
        $this->db->from('user');
        $this->db->join('login_user', 'login_user.id_loguser = user.id_loguser');
        $this->db->where('user.id_user', $_SESSION['id_user']);
        $query = $this->db->get();

        return  $query->row();
    }


}
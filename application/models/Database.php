<?php

class Database extends CI_Model
{
    private $userTbl = 'user';
    private $logUserTbl = 'login_user';

    public function insertData($object)
    {
        if($object instanceof User)
        {
            $this->db->trans_start();
            $this->db->insert($this->logUserTbl, $object->getLoginUser());
            $object->setLogUserId($this->db->insert_id());
            $this->db->insert($this->userTbl, $object->getUser());
            $this->db->trans_complete();
        }
    }

    public function selectAll($table)
    {
        $query = $this->db->get(strtolower($table));
        return $query->result_array();
    }
}
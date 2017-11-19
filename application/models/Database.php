<?php

class Database extends CI_Model
{
    private $userTbl = 'user';
    private $logUserTbl = 'login_user';


    public function insertData($object)
    {
        if($object instanceof User)
        {
            var_dump($object->getLoginUser());
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

    /**
     * @param $table - table name
     * @param array $what - simple array
     * @param array $where - array key => value
     * @return mixed - array
     */
    public function selectWhere($table, array $what, array $where)
    {
        $params;
        for($i = 0; $i < count($what); $i++)
        {
            $params .= $what[$i];
            if($i != (count($what) - 1))
            {
                $params .= ", ";
            }
        }
        $this->db->select($params);
        $query = $this->db->get_where($table, $where);

        return $query->result_array();
    }

    public function selectUserData($email)
    {
        $this->db->select('login_user.email, login_user.password, user.name, user.id_user');
        $this->db->from('login_user');
        $this->db->join('user', 'login_user.id_loguser = user.id_loguser');
        $this->db->where('login_user.email', trim(strip_tags($email)));
        $query = $this->db->get();

        return $query->result_array();
    }

}
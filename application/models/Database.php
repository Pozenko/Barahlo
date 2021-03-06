<?php

class Database extends CI_Model
{

    public function insertData($model_name, array $data)
    {
        $this->load->model($model_name, 'model');

        $this->model->setData($data);

        $this->model->insertData();
    }

    public function selectWhere($where, $model_name)
    {
        $this->load->model($model_name, 'model');
        return  $this->model->selectData($where);
    }

    public function selectAll($table)
    {
        $query = $this->db->get(strtolower($table));
        return $query->result_array();
    }

    public function updateData($model_name, array $updateData)
    {
        $this->load->model($model_name, 'model');
        $this->model->updateData($updateData);
    }

    public function deleteData($model_name)
    {
        $this->load->model($model_name, 'model');
        $this->model->deleteData();
    }
    /**
     * @param $table - table name
     * @param array $what - simple array fields
     * @param array $where - array key => value
     * @return mixed - array
     */
//    public function selectWhere($table, array $what, array $where)
//    {
//        $params;
//        for($i = 0; $i < count($what); $i++)
//        {
//            $params .= $what[$i];
//            if($i != (count($what) - 1))
//            {
//                $params .= ", ";
//            }
//        }
//        $this->db->select($params);
//        $query = $this->db->get_where($table, $where);
//
//        return $query->result_array();
//    }

}
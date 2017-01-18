<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Model extends CI_Model
{

    private $table_name = NULL;
    private $primary_key = NULL;

    public function __construct()
    {
        parent::__construct();
    }

    public function set_table($table_name, $primary_key)
    {
        $this->table_name = $table_name;
        $this->primary_key = $primary_key;
    }

    public function insert_row($data, $insert_id = true, $table_name = '')
    {
        if ($table_name == '')
            $table_name = $this->table_name;
        if (!$this->db->insert($table_name, $data))
            return false;
        return ($insert_id)? $this->db->insert_id() : true;
    }

    public function insert_rows($data, $table_name = '')
    {
        if ($table_name == '')
            $table_name = $this->table_name;
        if (!$this->db->insert_batch($table_name, $data))
            return false;
        return $this->db->insert_id();
    }

    public function update_row($id, $data, $table_name = '', $primary_key = '')
    {
        if ($table_name == '')
            $table_name = $this->table_name;
        if ($primary_key == '')
            $primary_key = $this->primary_key;
        $this->db->where($primary_key, $id);
        return $this->db->update($table_name, $data);
    }

    public function delete_row($id, $table_name = '', $primary_key = '')
    {
        if ($table_name == '')
            $table_name = $this->table_name;
        if ($primary_key == '')
            $primary_key = $this->primary_key;
        return $this->db->delete($table_name, array($primary_key => $id));
    }
    
    public function get_one_where($where, $table_name = '') {
        if ($table_name == '')
            $table_name = $this->table_name;

        return $this->db->get_where($table_name, $where)->row();
    }

}
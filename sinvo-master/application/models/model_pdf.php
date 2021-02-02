<?php

class Model_pdf extends CI_Model
{
    public function index()
    {
        return $this->db->get('tbl_order');
    }
    public function get($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}

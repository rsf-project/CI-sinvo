<?php

class Model_mtbl extends CI_Model
{
    public function get()
    {
        $sql = $this->db->get('mtbl_order');
        return $sql->result_array();
    }
    public function tampil_data()
    {
        return $this->db->get('mtbl_order');
    }
    public function tambah($data, $table)
    {
        $this->db->insert($data, $table);
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table) //($mtbl_id)
    {
        // $sql = $this->db->query("SELECT delete_mtbl_order($mtbl_id)");
        $this->db->where($where);
        $this->db->delete($table);
    }
}

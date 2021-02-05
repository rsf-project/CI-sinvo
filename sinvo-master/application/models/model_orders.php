<?php

class Model_orders extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_order');
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

    public function hapus($where, $table) //($order_id) 
    {
        //$sql = pg_query("SELECT delete_order($order_id)");
        //$sql = pg_query("SELECT delete_order_item($order_id)");
        $this->db->where($where);
        $this->db->delete($table);
    }
}

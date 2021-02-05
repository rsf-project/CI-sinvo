<?php

class Model_expense extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_expense');
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

    public function hapus($where, $table) //($expense_id)
    {
        // $sql = $this->db->query("SELECT delete_expense($expense_id)");
        $this->db->where($where);
        $this->db->delete($table);
    }
}

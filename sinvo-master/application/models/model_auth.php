<?php

class Model_auth extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_user');
    }
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('user_password');

        $result = $this->db->where('username', $username)
            ->where('user_password', $password)
            ->limit(1)
            ->get('tbl_user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
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

    public function hapus($where, $table) //($id_user)
    {
        // $sql = $this->db->query("SELECT delete_user($id_user)");
        $this->db->where($where);
        $this->db->delete($table);
    }
}

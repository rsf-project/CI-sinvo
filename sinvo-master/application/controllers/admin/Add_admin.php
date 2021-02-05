<?php

class Add_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_roleid') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/add_admin');
        $this->load->view('templates_admin/footer');
    }
    public function tambah()
    {
        $query = "INSERT INTO tbl_user VALUES ('$_POST[id_user]','$_POST[user_nama]','$_POST[username]','$_POST[user_password]','$_POST[user_roleid]','$_POST[user_address]','$_POST[user_phone]','$_POST[user_created_at]')";
        $result = $this->db->query($query);
        redirect('admin/manage_account/index');
    }

    public function edit($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['users'] = $this->model_auth->edit($where, 'tbl_user')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_admin', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id_user           = $this->input->post('id_user');
        $user_nama         = $this->input->post('user_nama');
        $username          = $this->input->post('username');
        $password          = $this->input->post('user_password');
        $user_roleid       = 2;
        $user_address      = $this->input->post('user_address');
        $user_phone        = $this->input->post('user_phone');
        $user_created_at   = $this->input->post('user_created_at');

        $data = array(
            'id_user'           => $id_user,
            'user_nama'         => $user_nama,
            'username'          => $username,
            'user_password'     => $password,
            'user_roleid'       => $user_roleid,
            'user_address'      => $user_address,
            'user_phone'        => $user_phone,
            'user_created_at'   => $user_created_at
        );

        $where = array('id_user' => $id_user, 'user_roleid' => 2);

        $this->model_auth->update($where, $data, 'tbl_user');
        redirect('admin/manage_account/index');
    }
    public function hapus($id_user)
    {
        // $this->model_auth->hapus($id_user);
        $where = array('id_user' => $id_user);
        $this->model_auth->hapus($where, 'tbl_user');
        redirect('admin/manage_account/index');
    }
}

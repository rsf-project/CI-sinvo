<?php

class Add_project extends CI_Controller
{
    //untuk cek session login 
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
        $this->load->view('admin/add_project');
        $this->load->view('templates_admin/footer');
    }
    public function tambah()
    {
        $query = $this->db->query("INSERT INTO mtbl_order VALUES ('$_POST[mtbl_id]','$_POST[mtbl_project_name]')");
        redirect('admin/manage_project/index');
    }
    public function edit($mtbl_id)
    {
        $where = array('mtbl_id' => $mtbl_id);
        $data['project'] = $this->model_mtbl->edit($where, 'mtbl_order')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_project', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $mtbl_id                 = $this->input->post('mtbl_id');
        $mtbl_project_name       = $this->input->post('mtbl_project_name');

        $data = array(
            'mtbl_id'            => $mtbl_id,
            'mtbl_project_name'  => $mtbl_project_name
        );

        $where = array('mtbl_id' => $mtbl_id);

        $this->model_mtbl->update($where, $data, 'mtbl_order');
        redirect('admin/manage_project/index');
    }
    //delete data didalam tabel emtbl_order
    public function hapus($mtbl_id)
    {
        // $this->model_mtbl->hapus($mtbl_id);
        $where = array('mtbl_id' => $mtbl_id);
        $this->model_mtbl->hapus($where, 'mtbl_order');
        redirect('admin/manage_project/index');
    }
}

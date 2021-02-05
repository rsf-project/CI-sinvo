<?php

class Dashboard_admin extends CI_Controller
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
        // require_once(APPPATH . 'views/templates_admin/header_baru.php');
        // require_once(APPPATH . 'views/templates_admin/footer.php');
        $data['orders'] = $this->model_orders->tampil_data()->result();
        $this->load->view('templates_admin/header_baru');
        $this->load->view('admin/dashboard2', $data);
        $this->load->view('templates_admin/footer');
    }
}

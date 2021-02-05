<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('user_password', 'user_password', 'required', ['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == false) {
            $this->load->view('header');
            $this->load->view('form_login');
            $this->load->view('templates_user/footer');
        } else {
            $auth = $this->model_auth->cek_login();
            //tampilkan error jika username/password tidak diisi atau salah
            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('user_roleid', $auth->user_roleid);

                switch ($auth->user_roleid) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('user/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

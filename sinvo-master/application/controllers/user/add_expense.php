<?php

class Add_expense extends CI_Controller
{
    //untuk cek session login 
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_roleid') != '2') {
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
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/add_expense');
        $this->load->view('templates_user/footer');
    }
    public function tambah()
    {
        $query = "INSERT INTO tbl_expense VALUES ('$_POST[expense_id]','$_POST[expense_nama]','$_POST[expense_qty]','$_POST[expense_harga]','$_POST[expense_total]','$_POST[expense_keterangan]','$_POST[expense_created_at]')";
        $result = pg_query($query);
        redirect('user/manage_expense/index');
    }
    public function edit($expense_id)
    {
        $where = array('expense_id' => $expense_id);
        $data['expense'] = $this->model_expense->edit($where, 'tbl_expense')->result();
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/edit_expense', $data);
        $this->load->view('templates_user/footer');
    }
    public function update()
    {
        $expense_id                 = $this->input->post('expense_id');
        $expense_nama               = $this->input->post('expense_nama');
        $expense_qty                = $this->input->post('expense_qty');
        $expense_harga              = $this->input->post('expense_harga');
        $expense_total              = $this->input->post('expense_total');
        $expense_keterangan         = $this->input->post('expense_keterangan');
        $expense_created_at         = $this->input->post('expense_created_at');

        $data = array(
            'expense_id'            => $expense_id,
            'expense_nama'          => $expense_nama,
            'expense_qty'           => $expense_qty,
            'expense_harga'         => $expense_harga,
            'expense_total'         => $expense_total,
            'expense_keterangan'    => $expense_keterangan,
            'expense_created_at'    => $expense_created_at
        );

        $where = array('expense_id' => $expense_id);

        $this->model_expense->update($where, $data, 'tbl_expense');
        redirect('user/manage_expense/index');
    }
    //delete data didalam tabel expense
    public function hapus($expense_id)
    {
        //$where = array('expense_id' => $expense_id);
        $this->model_expense->hapus($expense_id); //($where, 'tbl_expense');
        redirect('user/manage_expense/index');
    }
}

<?php

class Add_invoice extends CI_Controller
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
    //tampilan index
    public function index()
    {
        $this->load->model('model_mtbl');
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/add_invoice');
        $this->load->view('templates_user/footer');
    }
    //insert data invoice ke tabel order invoice
    public function tambah()
    {
        $order_item_id          = $_POST["order_item_id"];
        $order_id               = $_POST["order_id"];
        $order_project          = $_POST["order_project"];
        $order_description      = $_POST["order_description"];
        $order_item_qty         = $_POST["order_item_qty"];
        $order_item_price       = $_POST["order_item_price"];
        $order_item_subtotal    = $_POST["order_item_subtotal"];

        for ($count = 0; $count <= $_POST["total_item"]; $count++) {
            if ($order_id[$count] != '' && $order_project[$count] != '' && $order_description[$count] != '' && $order_item_qty[$count] != '' && $order_item_price[$count] != '' && $order_item_subtotal[$count] != '') {
                $sql = $this->db->query("INSERT INTO tbl_order_item (order_item_id, order_id, order_project, order_description, order_item_qty, order_item_price, order_item_subtotal) 
                VALUES('$order_item_id[$count]','$order_id[$count]','$order_project[$count]','$order_description[$count]','$order_item_qty[$count]','$order_item_price[$count]','$order_item_subtotal[$count]')");
            }
        }

        $order_id = $_POST["order_id"];
        $order_kode = $_POST["order_kode"];
        $order_nama = $_POST["order_nama"];
        $order_alamat = $_POST["order_alamat"];
        $order_subtotal = $_POST["order_subtotal"];
        $order_diskon = $_POST["order_diskon"];
        $order_great_total = $_POST["order_great_total"];
        $order_date = $_POST["order_date"];
        $order_payment = $_POST["order_payment"];

        $sql .= $this->db->query("INSERT INTO tbl_order VALUES ('$order_id','$order_kode','$order_nama','$order_alamat','$order_subtotal','$order_diskon','$order_great_total','$order_date','$order_payment')");
        redirect('user/manage_invoice/index');
    }

    //edit data didalam tabel order invoice
    public function edit($order_id)
    {
        $where = array('order_id' => $order_id);
        $data['orders'] = $this->model_orders->edit($where, 'tbl_order')->result();
        $data['order_item'] = $this->model_orders->edit($where, 'tbl_order_item')->result();
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/sidebar');
        $this->load->view('user/edit_invoice', $data);
        $this->load->view('templates_user/footer');
    }

    public function update()
    {
        $order_item_id          = $_POST["order_item_id"];
        $order_id               = $_POST["order_id"];
        $order_project          = $_POST["order_project"];
        $order_description      = $_POST["order_description"];
        $order_item_qty         = $_POST["order_item_qty"];
        $order_item_price       = $_POST["order_item_price"];
        $order_item_subtotal    = $_POST["order_item_subtotal"];

        $sql = $this->db->query("UPDATE tbl_order_item SET order_project = '$order_project',  order_description = ' $order_description', order_item_qty = '$order_item_qty', order_item_price = '$order_item_price', order_item_subtotal = '$order_item_subtotal' WHERE order_id = $order_id");

        $order_id = $_POST["order_id"];
        $order_kode = $_POST["order_kode"];
        $order_nama = $_POST["order_nama"];
        $order_alamat = $_POST["order_alamat"];
        $order_subtotal = $_POST["order_subtotal"];
        $order_diskon = $_POST["order_diskon"];
        $order_great_total = $_POST["order_great_total"];
        $order_date = $_POST["order_date"];
        $order_payment = $_POST["order_payment"];

        $sql = $this->db->query("UPDATE tbl_order SET order_kode = '$order_kode', order_nama = '$order_nama', order_alamat = '$order_alamat', order_subtotal = '$order_subtotal', order_diskon = '$order_diskon', order_great_total = '$order_great_total', order_date = '$order_date', order_payment = '$order_payment' WHERE order_id = $order_id");
        redirect('user/manage_invoice/index');
    }
    //delete data didalam tabel order invoice
    public function hapus($order_id)
    {
        //$this->model_orders->hapus($order_id);
        $where = array('order_id' => $order_id);
        $this->model_orders->hapus($where, 'tbl_order');
        $this->model_orders->hapus($where, 'tbl_order_item');
        redirect('user/manage_invoice/index');
    }

    public function getListProject()
    {
        $project = $this->model_mtbl->get();
        echo json_encode($project);
    }
}

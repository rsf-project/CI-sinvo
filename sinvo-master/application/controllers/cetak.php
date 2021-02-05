<?php

class Cetak extends CI_Controller
{
    public function lihatInvoice($order_id)
    {
        $where = array('order_id' => $order_id);
        $data['orders'] = $this->model_pdf->get($where, 'tbl_order')->result();
        $data['order_item'] = $this->model_pdf->get($where, 'tbl_order_item')->result();
        $this->load->view('lihatInvoice', $data);
    }
    public function downloadInvoice($order_id)
    {
        $where = array('order_id' => $order_id);
        $data['orders'] = $this->model_pdf->get($where, 'tbl_order')->result();
        $data['order_item'] = $this->model_pdf->get($where, 'tbl_order_item')->result();
        $this->load->view('downloadInvoice', $data);
    }
    public function lihatExpense($expense_id)
    {
        $where = array('expense_id' => $expense_id);
        $data['expense'] = $this->model_pdf->get($where, 'tbl_expense')->result();
        $this->load->view('lihatExpense', $data);
    }
    public function downloadExpense($expense_id)
    {
        $where = array('expense_id' => $expense_id);
        $data['expense'] = $this->model_pdf->get($where, 'tbl_expense')->result();
        $this->load->view('downloadExpense', $data);
    }
}

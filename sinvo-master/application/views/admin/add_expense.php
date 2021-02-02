<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Create Expense</small>
    </h1>
    <hr>
    <?php
    //untuk menampilkan id otomatis
    // $query = pg_query("SELECT max(expense_id) as id FROM tbl_expense");
    // $data = pg_fetch_array($query);
    // $id = $data['id'];
    // $id++;
    $query = $this->db->query("SELECT max(expense_id) as id FROM tbl_expense");
    $rows = $query->result();
    foreach ($rows as $row) {
      $id = $row->id;
    }
    $id++;
    ?>

    <form action="<?php echo base_url() . 'admin/add_expense/tambah' ?>" id="invoice_form" method="POST">
        <div class="form-group">
            <label>Expense Name<i class="text-danger">*</i></label>
            <input type="hidden" id="customer_name" name="expense_id" value="<?= $id ?>" class="form-control" maxlength="35" autocomplete="off">
            <input type="text" id="customer_name" name="expense_nama" class="form-control" maxlength="35" placeholder="Enter the expense name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Expense Description<i class="text-danger">*</i></label>
            <input type="text" id="customer_name" name="expense_keterangan" class="form-control" placeholder="Enter the expense description" autocomplete="off">
        </div>
        <hr class="colorgraph">
        <div class="form-group row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                        <tr>
                            <th width="10%" class="text-center">Qty</th>
                            <th width="10%" class="text-center">Unit Price</th>
                            <th width="13%" class="text-center">Great Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="number" name="expense_qty" id="expense_qty" class="form-control prc" min="1">
                            </td>
                            <td>
                                <input type="number" name="expense_harga" id="expense_harga" class="form-control prc" min="1">
                            </td>
                            <td>
                                <input type="number" readonly onmouseover="total();" name="expense_total" id="expense_total" class="form-control" step="0.00" min="0">
                        </tr>
                    </tbody>
                    <!-- hitung grand total otomatis -->
                    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
                    <script>
                        function total() {
                            var qty = document.getElementById('expense_qty').value;
                            var harga = document.getElementById('expense_harga').value;
                            var result = parseInt(qty) * parseInt(harga);
                            if (!isNaN(result)) {
                                document.getElementById('expense_total').value = result;
                            }
                        }
                    </script>
                </table>
            </div>
        </div>
        <hr class="colorgraph">

        <div class="form-group input-append">
            <div>
                <label>Created At<i class="text-danger"> *</i></label>
                <?php $offset = 7 * 60 * 60; //converting getDate GMT to GMT+7 and to seconds
                $dateFormat = "Y-m-d";
                //$dateFormat = "j F Y ";
                $time = gmdate($dateFormat, time() + $offset); ?>
                <input type="date" id="customer_name" class="form-control" maxlength="35" name="expense_created_at">
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div id="loadItemTableTemp"></div>
            </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-save"></i> Save</button>
                <a href="<?php echo base_url('admin/manage_expense/index') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>
            </div>
        </div>
    </form>
</div>
<!-- /.container -->


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright 2020 &copy; CV. Digital Creative - Indonesia</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
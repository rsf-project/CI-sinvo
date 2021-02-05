<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Edit Expense</small>
    </h1>
    <hr>

    <?php foreach ($expense as $exp) : ?>
        <form action="<?php echo base_url() . 'admin/add_expense/update' ?>" id="invoice_form" method="POST">
            <div class="form-group">
                <label>Expense Name <i class="text-danger">*</i></label>
                <input type="hidden" id="customer_name" name="expense_id" value="<?php echo $exp->expense_id ?>" class="form-control" maxlength="35" autocomplete="off">
                <input type="text" id="customer_name" name="expense_nama" value="<?php echo $exp->expense_nama ?>" class="form-control" maxlength="35" placeholder="Nama Pengeluaran" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Expense Description <i class="text-danger">*</i></label>
                <input type="text" id="customer_name" value="<?php echo $exp->expense_keterangan ?>" name="expense_keterangan" class="form-control" placeholder="Keterangan Pengeluaran" autocomplete="off">
            </div>
            <hr class="colorgraph">
            <div class="row">
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
                                    <input type="number" value="<?php echo $exp->expense_qty ?>" name="expense_qty" id="expense_qty" class="form-control prc expense_qty" min="1">
                                </td>
                                <td>
                                    <input type="number" value="<?php echo $exp->expense_harga ?>" name="expense_harga" id="expense_harga" class="form-control prc expense_harga" min="1">
                                </td>
                                <td>
                                    <input type="number" readonly value="<?php echo $exp->expense_total ?>" name="expense_total" id="expense_total" class="form-control expense_total" step="0.00" min="0">
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="colorgraph">

            <div class="form-group input-append">
                <div>
                    <label>Created At<i class="text-danger"> *</i></label>
                    <input type="date" id="customer_name" value="<?php echo $exp->expense_created_at ?>" class="form-control" maxlength="35" name="expense_created_at">
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
    <?php endforeach; ?>
</div>
<!-- /.container -->

<!-- script buat add row pada halaman add invoice-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var order_great_total = $('#expense_total').text();
        var count = 1;

        //perhitungan harga otomatis
        function cal_final_total(count) {
            var order_great_total = 0;
            var quantity = 0;
            var price = 0;
            var subtotal = 0;
            var subTotal = 0;

            quantity = $('#expense_qty').val();
            if (quantity > 0) {
                price = $('#expense_harga').val();
                if (price > 0) {
                    subtotal = parseFloat(quantity) * parseFloat(price);
                    $('#expense_total').val(subtotal);
                }
            }
        }

        //execute dan tampilin perhitungan ke kolom total
        $(document).on('blur', '.expense_harga', function() {
            cal_final_total(count);
        });
        $(document).on('blur', '.expense_total', function() {
            cal_final_total(count);
        });
    });
</script>

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
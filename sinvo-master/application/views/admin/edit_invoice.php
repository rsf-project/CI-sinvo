<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Edit Invoice</small>
    </h1>
    <hr>

    <?php foreach ($orders as $ord) : ?>
        <form action="<?php echo base_url() . 'admin/add_invoice/update' ?>" id="invoice_form" method="POST">
            <div class="form-group">
                <label>Kode Invoice<i class="text-danger">*</i></label>
                <input id="order_kode1" class="form-control" maxlength="35" name="order_kode" readonly value="<?= $ord->order_kode ?>">
                <input type="hidden" id="order_id" name="order_id" class="form-control" value="<?= $ord->order_id ?>" maxlength="35" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Customer Name <i class="text-danger">*</i></label>
                <input type="text" id="order_nama" name="order_nama" class="form-control" value="<?= $ord->order_nama ?>" maxlength="35" placeholder="Enter customer name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Customer Address<i class="text-danger">*</i></label>
                <input type="text" id="order_alamat" name="order_alamat" class="form-control" value="<?= $ord->order_alamat ?>" maxlength="35" placeholder="Enter customer name" autocomplete="off">
            </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" id="invoice-item-table">
                        <thead>
                            <tr>
                                <th width="1%" class="text-center">No</i></th>
                                <th width="13%" class="text-center">Type Of Project <i class="text-danger">*</i></th>
                                <th width="13%" class="text-center">Description <i class="text-danger">*</i></th>
                                <th width="7%" class="text-center">Qty <i class="text-danger">*</i></th>
                                <th width="10%" class="text-center">Unit Price <i class="text-danger">*</i></th>
                                <th width="10%" class="text-center">Subtotal</th>
                            </tr>
                        </thead>
                        <?php $nomor = 1;
                        foreach ($order_item as $item) : ?>
                            <tbody align="center">
                                <tr>
                                    <td><span id="sr_no"><?= $nomor++; ?></span></td>
                                    <td><input type="text" value="<?= $item->order_project ?>" name="order_project1" id="order_project1" class="form-control input-sm"></td>
                                    <td><input type="text" value="<?= $item->order_description ?>" name="order_description" id="order_description1" class="form-control input-sm" /></td>
                                    <td><input type="text" value="<?= $item->order_item_qty ?>" name="order_item_qty" id="order_item_qty1" data-srno="1" class="form-control input-sm order_item_qty" /></td>
                                    <td><input type="text" value="<?= $item->order_item_price ?>" name="order_item_price" id="order_item_price1" data-srno="1" class="form-control input-sm number_only order_item_price" /></td>
                                    <td><input type="text" readonly value="<?= $item->order_item_subtotal ?>" name="order_item_subtotal" id="order_item_subtotal1" data-srno="1" class="form-control input-sm order_item_subtotal" /></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                    <table class="table table-hover" id="invoice-item-table">
                        <tr>
                            <th>Total Amount</th>
                            <td><input type="text" readonly value="<?= $ord->order_subtotal ?>" name="order_subtotal" id="order_subtotal" class="form-control input-sm order_subtotal"></th>
                        </tr>
                        <tr>
                            <th>Discount (%)</th>
                            <td><input type="text" value="<?= $ord->order_diskon ?>" name="order_diskon" id="order_diskon" class="form-control" min="0" max="100"></th>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td><input type="text" readonly value="<?= $ord->order_great_total ?>" name="order_great_total" id="order_great_total" class="form-control input-sm order_great_total"></td>
                        </tr>
                    </table>
                    <hr class="colorgraph">
                </div>
            </div>

            <div class="form-group input-append">
                <div>
                    <label>Created At<i class="text-danger"> *</i></label>
                    <input id="order_date" class="form-control" name="order_date" value="<?= $ord->order_date ?>" readonly>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <label>Payment Method<i class="text-danger"> *</i></label>
                    <select value="<?= $ord->order_payment ?>" name="order_payment" id="role" class="custom-select">
                        <option hidden>Choose Payment Method</option>
                        <option value="Transfer">Transfer (BCA 6175028238 an Muhammad Malian Zikri)</option>
                        <option value="Cash">Cash</option>
                    </select>
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
                    <a href="<?php echo base_url('admin/manage_invoice/index') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>
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
        var order_great_total = $('#order_great_total').text();
        var count = 1;

        $(document).on('click', '#add_row', function() {
            count++;
            $('#total_item').val(count);
            var html_code = '';
            html_code += '<tr id="row_id_' + count + '">';
            html_code += '<td><span id="sr_no">' + count + '</span><input type="hidden" name="order_item_id[]" id="order_item_id' + count + '" class="form-control input-sm" /></td>';
            html_code += '<td><select type="text" name="order_project[]" id="order_project' + count + '" class="order_project form-control input-sm " ></td>';
            html_code += '<td><input type="text" name="order_description[]" id="order_description' + count + '" class="form-control input-sm" /></td>';
            html_code += '<td><input type="text" name="order_item_qty[]" id="order_item_qty' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_qty" /></td>';
            html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_price" /></td>';
            html_code += '<td><input type="text" name="order_item_subtotal[]" id="order_item_subtotal' + count + '" data-srno="' + count + '" class="form-control input-sm order_item_subtotal" readonly /></td>';
            html_code += '<td><button type="button" name="remove_row" id="' + count + '" class="btn btn-danger btn-xs remove_row"><i class="fas fa-trash"></i></button></td>';
            html_code += '</tr>';
            $('#invoice-item-table').append(html_code);
        });

        //membuat tombol remove pada multiple input di halaman add invoice
        $(document).on('click', '.remove_row', function() {
            var row_id = $(this).attr("id");
            var order_item_subtotal = $('#order_item_subtotal' + row_id).val();
            var order_great_total = $('#order_great_total').text();
            var result_amount = parseFloat(order_great_total) - parseFloat(order_item_subtotal);
            $('#order_great_total').text(result_amount);
            $('#row_id_' + row_id).remove();
            count--;
            $('#total_item').val(count);
        });

        $("#order_project1" || ".order_project")
            .append($("<option></option>")
                .attr("value", 0)
                .text("Choose Project"));

        $.ajax({
            method: "POST",
            url: "<?= base_url() ?>admin/add_invoice/getListProject",
            data: {}
        }).done(function(res) {
            var project = JSON.parse(res);
            $.each(project, function(key, value) {
                $("#order_project1" || ".order_project")
                    .append($("<option></option>")
                        .attr("value", value['mtbl_project_name'])
                        .text(value['mtbl_project_name']));
            });
        });

        //perhitungan harga otomatis
        function cal_final_total(count) {
            var order_great_total = 0;
            var quantity = 0;
            var price = 0;
            var subtotal = 0;
            var subTotal = 0;

            for (j = 1; j <= count; j++) {
                quantity = $('#order_item_qty' + j).val();
                if (quantity > 0) {
                    price = $('#order_item_price' + j).val();
                    if (price > 0) {
                        subtotal = parseFloat(quantity) * parseFloat(price);
                        $('#order_item_subtotal' + j).val(subtotal);
                        var subTotal = subTotal + subtotal;
                        $('#order_subtotal').val(parseFloat(subTotal));
                        var taxRate = $("#order_diskon").val();
                        if (subTotal) {
                            var taxAmount = subTotal * taxRate / 100;
                            $('#order_diskon1').val(taxAmount);
                            subTotal2 = parseFloat(subTotal) - parseFloat(taxAmount);
                            $('#order_great_total').val(subTotal2);
                        }
                    }
                }
            }
        }

        //execute dan tampilin perhitungan ke kolom total
        $(document).on('blur', '.order_item_price', function() {
            cal_final_total(count);
        });
        $(document).on('blur', '.order_item_subtotal', function() {
            cal_final_total(count);
        });
        $(document).on('blur', '#order_diskon', function() {
            cal_final_total(count);
        });
        $(document).on('blur', '.order_great_total', function() {
            cal_final_total(count);
        });

        //pengecekan form diisi lengkap atau tidak
        $('#create_invoice').click(function() {
            if ($.trim($('#order_nama').val()).length == 0) {
                alert("Please Enter Customer Name");
                return false;
            }

            if ($.trim($('#order_alamat').val()).length == 0) {
                alert("Please Enter Customer Address");
                return false;
            }

            for (var no = 1; no <= count; no++) {
                if ($.trim($('#order_project' + no || '#order_project1' + no).val()).length == 0) {
                    alert("Please Enter Project Name");
                    $('#item_name' + no).focus();
                    return false;
                }

                if ($.trim($('#order_item_qty' + no || '#order_item_qty1' + no).val()).length == 0) {
                    alert("Please Enter Quantity");
                    $('#order_item_qty' + no).focus();
                    return false;
                }

                if ($.trim($('#order_item_price' + no || '#order_item_price1' + no).val()).length == 0) {
                    alert("Please Enter Price");
                    $('#order_item_price' + no).focus();
                    return false;
                }
            }
            $('#invoice_form').submit();
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
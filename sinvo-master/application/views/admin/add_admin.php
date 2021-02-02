<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Add Admin</small>
    </h1>
    <hr>
    <?php
    //mengambil id paling terakhir dari tabel user dan +1 ketika tambah akun
    $query = pg_query("SELECT max(id_user) as id FROM tbl_user");
    $data = pg_fetch_array($query);
    $id = $data['id'];
    $id++;
    ?>
    <form action="<?= base_url() . 'admin/add_admin/tambah' ?>" id="invoice_form" method="post">
        <div class="form-group">
            <label>ID <i class="text-danger">*</i></label>
            <input type="number" id="id_user" readonly name="id_user" value="<?= $id ?>" class="form-control" maxlength="35" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Full Name <i class="text-danger">*</i></label>
            <input type="text" id="user_nama" name="user_nama" class="form-control" maxlength="50" placeholder="Enter your full name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Username <i class="text-danger">*</i></label>
            <input type="text" id="username" name="username" class="form-control" maxlength="10" placeholder="Enter the username" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password <i class="text-danger">*</i></label>
            <input type="password" id="user_password" name="user_password" class="form-control" maxlength="50" placeholder="Enter the password" autocomplete="off">
            <input type="hidden" id="user_roleid" name="user_roleid" value="2" class="form-control" maxlength="35" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Address<i class="text-danger">*</i></label>
            <input type="text" id="user_alamat" name="user_address" class="form-control" maxlength="250" placeholder="Enter your address" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Phone Number<i class="text-danger">*</i></label>
            <input type="text" id="user_phone" name="user_phone" class="form-control" maxlength="250" placeholder="Enter your phone number" autocomplete="off">
        </div>
        <div>
            <label>Created At<i class="text-danger"> *</i></label>
            <?php $offset = 7 * 60 * 60; //converting getDate GMT to GMT+7 and to seconds
            $dateFormat = "Y-m-d";
            $time = gmdate($dateFormat, time() + $offset); ?>
            <input id="customer_name" class="form-control" maxlength="35" name="user_created_at" value="<?= $time ?>" readonly>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div id="loadItemTableTemp"></div>
            </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-plus"></i> Add</button>
                <a href="<?php echo base_url('admin/manage_account') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>

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
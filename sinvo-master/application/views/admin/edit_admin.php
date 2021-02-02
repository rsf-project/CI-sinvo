<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Edit Admin</small>
    </h1>
    <hr>

    <?php foreach ($users as $usr) : ?>
        <form action="<?php echo base_url() . 'admin/add_admin/update' ?>" id="invoice_form" method="post">
            <div class="form-group">
                <label>ID <i class="text-danger">*</i></label>
                <input type="text" id="customer_name" name="id_user" readonly value="<?php echo $usr->id_user ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Full Name <i class="text-danger">*</i></label>
                <input type="hidden" id="customer_name" name="id_user" value="<?php echo $usr->id_user ?>" class="form-control">
                <input type="text" id="user_nama" name="user_nama" value="<?php echo $usr->user_nama ?>" class="form-control" maxlength="35" placeholder="Masukkan nama lengkap" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Username <i class="text-danger">*</i></label>
                <input type="text" id="username" name="username" value="<?php echo $usr->username ?>" class="form-control" maxlength="35" placeholder="Masukkan username" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password <i class="text-danger">*</i></label>
                <input type="password" id="user_password" name="user_password" value="<?php echo $usr->user_password ?>" class="form-control" maxlength="35" placeholder="Masukkan password" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Address <i class="text-danger">*</i></label>
                <input type="text" id="user_address" name="user_address" value="<?php echo $usr->user_address ?>" class="form-control" maxlength="35" placeholder="Masukkan password" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone Number <i class="text-danger">*</i></label>
                <input type="text" id="user_phone" name="user_phone" value="<?php echo $usr->user_phone ?>" class="form-control" maxlength="35" placeholder="Masukkan password" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Created At<i class="text-danger">*</i></label>
                <input type="text" id="user_created_at" name="user_created_at" readonly value="<?php echo $usr->user_created_at ?>" class="form-control" maxlength="35" placeholder="Masukkan password" autocomplete="off">
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
                    <a href="<?php echo base_url('admin/manage_account') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>

                </div>
            </div>
        </form>
    <?php endforeach; ?>
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
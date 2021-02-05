<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Edit Project List</small>
    </h1>
    <hr>

    <?php foreach ($project as $pro) : ?>
        <form action="<?php echo base_url() . 'admin/add_project/update' ?>" id="invoice_form" method="post">
            <div class="form-group">
                <label>ID <i class="text-danger">*</i></label>
                <input type="text" id="mtbl_id" name="mtbl_id" readonly value="<?php echo $pro->mtbl_id ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Project Name <i class="text-danger">*</i></label>
                <input type="text" id="mtbl_project_name" name="mtbl_project_name" value="<?php echo $pro->mtbl_project_name ?>" class="form-control" maxlength="35" placeholder="Masukkan nama lengkap" autocomplete="off">
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
                    <a href="<?php echo base_url('admin/manage_project') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>

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
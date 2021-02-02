<div class="container">
    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">
        <small>Add Project List</small>
    </h1>
    <hr>
    <?php
    //mengambil id paling terakhir dari tabel user dan +1 ketika tambah akun
    // $query = pg_query("SELECT max(mtbl_id) as id FROM mtbl_order");
    // $data = pg_fetch_array($query);
    // $id = $data['id'];
    // $id++;
    $query = $this->db->query("SELECT max(mtbl_id) as id FROM mtbl_order");
    $rows = $query->result();
    foreach ($rows as $row) {
      $id = $row->id;
    }
    $id++
    ?>
    <form action="<?= base_url() . 'admin/add_project/tambah' ?>" id="invoice_form" method="post">
        <div class="form-group">
            <label>ID <i class="text-danger">*</i></label>
            <input type="number" id="mtbl_idr" readonly name="mtbl_id" value="<?= $id ?>" class="form-control" maxlength="35" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Project Name <i class="text-danger">*</i></label>
            <input type="text" id="mtbl_project_name" name="mtbl_project_name" class="form-control" maxlength="50" placeholder="Enter your full name" autocomplete="off">
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
                <a href="<?php echo base_url('admin/manage_project') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>

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
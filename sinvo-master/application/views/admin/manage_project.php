<div class="container-fluid">
    <h2 class="mt-4 mb-3">Manage Project List</h2>
    <div class="align-self-end ml-auto" align="right" style="margin-top: -40px;">
        <a href="<?php echo base_url('admin/add_project') ?>" class="btn btn-danger btn-sm mb-3"><i class="fas fa-plus fa-sm mr-3"></i>Add Project List</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Project List</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1;
                    foreach ($project as $pro) :
                    ?>
                        <tr align="center">
                            <th class="align-middle"><?php echo $nomor ?></th>
                            <td class="align-middle"><?php echo $pro->mtbl_project_name ?></td>
                            <td class="align-middle">
                                <?php echo anchor('admin/add_project/edit/' . $pro->mtbl_id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?>
                                <?php echo anchor('admin/add_project/hapus/' . $pro->mtbl_id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
                            </td>
                        </tr>
                    <?php $nomor++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->

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
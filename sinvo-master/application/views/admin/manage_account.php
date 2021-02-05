<div class="container-fluid">
    <h2 class="mt-4 mb-3">Manage Accounts</h2>
    <div class="align-self-end ml-auto" align="right" style="margin-top: -40px;">
        <a href="<?php echo base_url('admin/add_admin') ?>" class="btn btn-danger btn-sm mb-3"><i class="fas fa-plus fa-sm mr-3"></i>Add Admin</a>
    </div>
    <!-- DataTales Example -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead align="center">
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php $nomor = 1;
                    foreach ($users as $usr) :
                    ?>
                        <?php //php mengubah role id angka menjadi string 2 = admin, 1 = owner;
                        if ($usr->user_roleid == 2) {
                            $usr->user_roleid = "Admin";
                        } else {
                            $usr->user_roleid = "Owner";
                        }
                        ?>
                        <td><?php echo $usr->user_nama ?></td>
                        <td><?php echo $usr->username ?></td>
                        <td><?php echo $usr->user_address ?></td>
                        <td><?php echo $usr->user_phone ?></td>
                        <td><?php echo $usr->user_roleid ?></td>
                        <td><?php echo $usr->user_created_at ?></td>
                        <td>
                            <?php echo anchor('admin/add_admin/edit/' . $usr->id_user, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?>
                            <?php echo anchor('admin/add_admin/hapus/' . $usr->id_user, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
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
<div class="container-fluid">
    <h2 class="mt-4 mb-3">Manage Invoice</h2>
    <div class="align-self-end ml-auto" align="right" style="margin-top: -40px;">
        <a href="<?php echo base_url('admin/add_invoice') ?>" class="btn btn-sm btn-danger mb-3"><i class="fas fa-plus fa-sm mr-3"></i>Tambah Invoice</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Invoice Code</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Great Total</th>
                        <th>Payment Method</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $ord) : ?>
                        <tr align="center">
                            <th scope="row"><?php echo $ord->order_kode ?></th>
                            <td><?php echo $ord->order_nama ?></td>
                            <td><?php echo $ord->order_alamat ?></td>
                            <td>Rp. <?php echo number_format($ord->order_great_total, 0, ',', '.') ?></td>
                            <td><?php echo $ord->order_payment ?></td>
                            <td><?php echo $ord->order_date ?></td>
                            <td>
                                <?php echo anchor('cetak/downloadInvoice/' . $ord->order_id, '<div class="btn btn-success btn-sm"><i class="fas fa-download"></i></div>'); ?>
                                <?php echo anchor('cetak/lihatInvoice/' . $ord->order_id, '<div class="btn btn-info btn-sm" ><i class="fas fa-file-pdf"></i></div>'); ?>
                                <?php echo anchor('admin/add_invoice/edit/' . $ord->order_id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?>
                                <?php echo anchor('admin/add_invoice/hapus/' . $ord->order_id, '<div class="btn btn-danger btn-sm" id="delete"><i class="fas fa-trash"></i></div>'); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
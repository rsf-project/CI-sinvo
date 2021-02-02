<body data-home-page="#" data-home-page-title="Invoice" class="u-body">
  <header class="u-clearfix u-header u-header" id="sec-e8e6">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="<?= base_url('admin/dashboard_admin') ?>" class="u-image u-logo u-image-1">
        <img src="<?= base_url() ?>assets/img/logo.png" class="u-logo-image u-logo-image-1" data-image-width="232.0004">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="#">
            <svg>
              <use xmlns:xlink="#" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="#" xmlns:xlink="#">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="<?= base_url('admin/manage_invoice') ?>" style="padding: 10px 20px;">Manage Invoice</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="<?= base_url('admin/manage_account') ?>" style="padding: 10px 20px;">Manage Account</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="<?= base_url('auth/logout') ?>" style="padding: 10px 20px;">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-2633">
    <h1 class="u-heading-font u-text u-text-default u-text-palette-1-dark-3 u-title u-text-1">Buat Invoice dengan&nbsp;<br>mudah!&nbsp;
    </h1>
    <p class="u-text u-text-2">Invoice membantu kita untuk mengatur income dan membuat bukti pembayaran dengan mudah.<br>
      <br>
      <br>
    </p>
    <a href="<?= base_url('admin/add_invoice') ?>" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-50 u-btn-1">BUAT INVOICE</a>
    <img class="u-expand-resize u-image u-image-1" src="<?= base_url() ?>assets/img/dataanalyse.png">
    <img src="<?= base_url() ?>assets/img/vector.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2" data-image-width="1454" data-image-height="4445">

    <?php
    // menampilkan total pemasukan
    // $query = pg_query("SELECT sum(order_great_total) as harga FROM tbl_order");
    // $row = pg_fetch_assoc($query);
    // $sum = $row['harga'];
    $query = $this->db->query("SELECT sum(order_great_total) as harga FROM tbl_order");
    $rows = $query->result();
    foreach ($rows as $row) {
      $sum = $row->harga;
    }

    // //menampilkan total pengeluaran
    // $query = pg_query("SELECT sum(expense_total) as expense FROM tbl_expense");
    // $row = pg_fetch_assoc($query);
    // $exp = $row['expense'];
    $query = $this->db->query("SELECT sum(expense_total) as expense FROM tbl_expense");
    $rows = $query->result();
    foreach ($rows as $row) {
      $exp = $row->expense;
    }

    // //menampilkan total akun
    // $query = pg_query("SELECT count(id_user) as totaluser FROM tbl_user");
    // $row = pg_fetch_assoc($query);
    // $user = $row['totaluser'];
    $query = $this->db->query("SELECT count(id_user) as totaluser FROM tbl_user");
    $rows = $query->result();
    foreach ($rows as $row) {
      $user = $row->totaluser;
    }

    // //menampilkan total invoice
    // $query = pg_query("SELECT count(order_id) as totalinvoice FROM tbl_order");
    // $row = pg_fetch_assoc($query);
    // $invoice = $row['totalinvoice'];
    $query = $this->db->query("SELECT count(order_id) as totalinvoice FROM tbl_order");
    $rows = $query->result();
    foreach ($rows as $row) {
      $invoice = $row->totalinvoice;
    }
    ?>

    <div class="container-sm shadow h-100 py-2" style="margin-top: -300px; max-width:1000px;" ">
      <div class=" row" align="center">
      <div class="col-sm">
        <p>Income</p>
        <p class="textbesar">Rp <?= number_format($sum) ?></p>
        <p><a href="<?= base_url('admin/manage_invoice') ?>">View Details</a></p>
      </div>
      <div class="borders-right"></div>
      <div class="col-sm">
        <p>Expense</p>
        <p class="textbesar">Rp <?= number_format($exp) ?></p>
        <p><a href="<?= base_url('admin/manage_expense') ?>">View Details</a></p>
      </div>
      <div class="borders-right"></div>
      <div class="col-sm">
        <p>Total Account</p>
        <p class="textbesar"><?= $user ?></p>
        <p><a href="<?= base_url('admin/manage_account') ?>">View Details</a></p>
      </div>
      <div class="borders-left"></div>
      <div class="col-sm">
        <p>Total Invoice</p>
        <p class="textbesar"><?= $invoice ?></p>
        <p><a href="<?= base_url('admin/manage_invoice') ?>">View Details</a></p>
      </div>
    </div>
    </div>
    <?php $income = $this->db->get('tbl_order')->result(); ?>
    <!-- Area Chart -->
    <div class="pemasukan chart shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Payment Received</h6>
      </div>
      <div class="card-body">
        <div class="chart-area">
          <canvas id="myAreaChart"></canvas>
        </div>
      </div>
    </div>
  </section>

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
  </div>
</body>
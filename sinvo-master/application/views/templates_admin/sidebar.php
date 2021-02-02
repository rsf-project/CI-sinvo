<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="<?php echo base_url('admin/dashboard_admin') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url() ?>assets/img/logo.png" class="u-logo-image u-logo-image-1" width="200">
                </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="color: black;">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link bg-light" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <i class="fas fa-fw fa-chart-area" style="color: black;"></i>
                    <span style="color: black;">Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" style="color: black;">
            <!-- Heading -->
            <div class=" sidebar-heading" style="color: red;">
                Mains
            </div>
            <!-- Nav Item -Invoice -->
            <li class="nav-item">
                <a class="nav-link collapsed bg-light" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-file-invoice " style="color: black;"></i>
                    <span style="color: black;">Invoices</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: black;">Action : </h6>
                        <a class=" collapse-item" style="color: black;" href="<?php echo base_url('admin/add_invoice') ?>">Add Invoice</a>
                        <a class=" collapse-item" style="color: black;" href="<?php echo base_url('admin/manage_invoice') ?>">Manage Invoice</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pengeluaran -->
            <li class="nav-item">
                <a class="nav-link collapsed bg-light" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-dollar-sign" style="color: black;"></i>
                    <span style="color: black;">Expenses</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: black;">Action :</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/add_expense') ?>" style="color: black;">Add Expenses</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/manage_expense') ?>" style="color: black;">Manage Expenses</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class=" sidebar-divider" style="color: black;">
            <!-- Heading -->
            <div class=" sidebar-heading" style="color: red;">
                Settings
            </div>
            <!-- Nav Item - Manage Accounts-->
            <li class="nav-item">
                <a class="nav-link bg-light" href="<?php echo base_url('admin/manage_account') ?>">
                    <i class="fas fa-user-cog " style="color: black;"></i>
                    <span style="color: black;">Manage Accounts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-light" href="<?php echo base_url('admin/manage_project') ?>">
                    <i class="fas fa-tasks " style="color: black;"></i>
                    <span style="color: black;">Manage Project List</span></a>
            </li>
            <!-- Divider -->
            <hr class=" sidebar-divider d-none d-md-block" style="color: black;">
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- login status -->
                        <ul class="navbar-nav my-1">
                            <ul class="na navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li class="mt-1">
                                        <div>Hi, <?php echo $this->session->userdata('username') ?></div>
                                    </li>
                                    <div class="topbar-divider d-none d-sm-block"></div>
                                    <li class="mt-1"><?php echo anchor('auth/logout', 'Logout'); ?></li>
                                <?php } else { ?>
                                    <li class="mt-1"><?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php } ?>
                            </ul>
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                        </ul>
                </nav>
                <!-- End of Topbar -->
                </ul>
                </nav>
                <!-- End of Topbar -->
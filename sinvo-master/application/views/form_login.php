<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg mt-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <?php echo $this->session->flashdata('pesan'); ?>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username">
                                            <?php echo form_error('username', '<div class="text-danger small mt-2 ml-2">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="user_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password">
                                            <?php echo form_error('user_password', '<div class="text-danger small mt-2 ml-2">', '</div>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-dark form-control">Masuk</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>
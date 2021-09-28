<style>
    .bgregis {
        background-image: url("<?= base_url('assets/img/foto/registrasi.jpg'); ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="bg-gradient bgregis">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama lengkap" value="<?= set_value('name'); ?>">
                                    <!-- pesan yang akan muncul ketika form error -->
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nick" name="nick" placeholder="Nama Panggilan" value="<?= set_value('nick'); ?>">
                                    <!-- pesan yang akan muncul ketika form error -->
                                    <?= form_error('nick', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Alamat" value="<?= set_value('address'); ?>">
                                    <!-- pesan yang akan muncul ketika form error -->
                                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="Nomer Telepon / WA" value="<?= set_value('no_telp'); ?>">
                                    <!-- pesan yang akan muncul ketika form error -->
                                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrasi Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p>Sudah punya akun ?<a class="small" href="<?= base_url('auth'); ?>"> KUY LOGIN!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
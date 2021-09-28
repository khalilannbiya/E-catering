<div class="container fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h1 mb-0 font-weight-bold text-white"><?= $anggota; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Pesanan</div>
                            <div class="h1 mb-0 font-weight-bold text-white"><?= $t_pesanan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-utensils fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="sidebar-divider">
    <div class="row">
        <div class="table-responsive table-bordered col-sm-13 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Pemesanan</span>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Pembayaran</th>
                        <th>Paket</th>
                        <th>Waktu Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pesanan as $p) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['address']; ?></td>
                            <td><?= $p['no_telp']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['pembayaran']; ?></td>
                            <td><?= $p['paket']; ?></td>
                            <td><?= date('d F Y', $p['date_created']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
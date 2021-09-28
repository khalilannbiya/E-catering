<main>
    <div class="card mb-5" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Profile Admin</h5>
                    <p class="card-text">Nama : <?= $user['name']; ?></p>
                    <p class="card-text">Email : <?= $user['email']; ?></p>
                    <p class="card-text">No Telepon : <?= $user['no_telp']; ?></p>
                    <p class="card-text">Alamat : <?= $user['address']; ?></p>
                    <p class="card-text"><small class="text-muted">Member Sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</main>
<main>
    <div class="content">
        <article class="bgarticle">
            <div class="banner">
                <img src="<?php echo base_url() ?>assets/image/banner.png">
                <div class="poster">
                    <h2>My Profile</h2>
                </div>
            </div>
        </article>
    </div>
    <div class="bayangan">
        <article class="biodata card">
            <header>
                <h2>My Profile</h2>
                <figure>
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                </figure>
            </header>
            <section>
                <br>
                <h3>Data Diri</h3>
                <table>
                    <tr>
                        <th>Nama</th>
                        <th> : </th>
                        <td><?= $user['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th> : </th>
                        <td><?= $user['email']; ?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <th> : </th>
                        <td><?= $user['no_telp']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th> : </th>
                        <td><?= $user['address']; ?></td>
                    </tr>
                </table>
                <br>
                <div class="since">
                    <p>Member Sejak : <?= date('d F Y', $user['date_created']); ?> </p>
                </div>
            </section>
        </article>
    </div>
</main>
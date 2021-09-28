<main>
    <div class="content">
        <article class="bgarticle">
            <div class="banner">
                <img src="<?php echo base_url() ?>assets/image/banner.png">
                <div class="poster">
                    <h2>pemesanan</h2>
                    <p>Silahkan Isi Form ini!</p>
                </div>
            </div>
        </article>
    </div>
    <div>
        <p class="alert"><?= $this->session->flashdata('message'); ?></p>
        <article class="bayangan">
            <h2>Costumer Information</h2>
            <hr>
            <p>Nama Lengkap : <span><?= $user['name']; ?></span> </p>
            <p>Alamat : <span><?= $user['address']; ?></span> </p>
            <p>No Telepon : <span><?= $user['no_telp']; ?></span> </p>
            <p>Email : <span><?= $user['email']; ?></span> </p>
            <form action="<?= base_url('user/pemesanan'); ?>" method="POST">
                <p>Pembayaran : </p>
                <select name="bank" id="bank" class="option">
                    <option value="">--Pilih Bank--</option>
                    <option value="bank Jago">Bank Jago</option>
                    <option value="Bank Mandiri">Bank Mandiri</option>
                    <option value="Bank BNI">Bank BNI</option>
                    <option value="Bank BCA">Bank BCA</option>
                    <option value="Bank BRI">Bank BRI</option>
                </select>
                <?= form_error('bank', '<small class="text-danger pl-3">', '</small>'); ?>
                <p>Paket : </p>
                <select name="paket" id="paket" class="option">
                    <option value="">--Pilih paket--</option>
                    <option value="1 hari">1 hari</option>
                    <option value="1 bulan">1 bulan</option>
                    <option value="6 bulan">6 bulan</option>
                    <option value="1 tahun">1 tahun</option>
                </select>
                <?= form_error('paket', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <p class="capitalize">Transfer ke : </p>
                <p class="capitalize"> Nomer Rekening BCA : <strong>1209-9827-2783-8288</strong></p>
                <p class="capitalize"> Atas Nama: <strong>katering sehat</strong></p>
                <button type="submit" class="button">
                    Proses
                </button>
            </form>
        </article>
    </div>



</main>
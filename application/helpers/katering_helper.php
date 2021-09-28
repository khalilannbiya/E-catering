<?php

function cek_login()
{
    // get_instance() adalah instansi ci, berfungsi untuk memanggil library CI didalam fungsi ini, karena helper tidak mengenal $this
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}

<?php
    if(!defined('INDEX')) header('location:login.php');

    $halaman = [
        "dashboard",
        "data_nasabah",
        "data_admin",
        "nasabah_tambah",
        "nasabah_insert",
        "nasabah_edit",
        "nasabah_update",
        "nasabah_hapus",
        "admin_tambah",
        "admin_insert",
        "admin_hapus",
        "nasabah_data",
        "riwayat",
        "riwayat2",
        "riwayat_hapus",
        "tarik",
        "tarik_proses",
        "tabung",
        "tabung_proses",
        "cetak_rekap_bulanan",
        "slip_cetak",
        "data_teller",
        "teller_tambah",
        "teller_insert",
        "teller_hapus"
    ];

    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else {
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if($hal == $h) {
            include "content/$h.php";
            break;
        }
    }
?>
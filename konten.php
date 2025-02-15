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
        "admin_edit",
        "admin_update",
        "admin_hapus",
        "nasabah_data",
        "tambah_nasabah",
        "update_nasabah",
        "riwayat",
        "riwayat2",
        "riwayat_tambah",
        "riwayat_insert",
        "riwayat_hapus",
        "tarik",
        "tarik_proses",
        "tabung",
        "tabung_proses"
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
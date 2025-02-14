<?php
    if(!defined('INDEX')) header('location:login.php');

    $halaman = [
        "dashboard",
        "data_siswa",
        "tambah_datasiswa",
        "tambah_admin",
        "insert_admin",
        "cek-riwayat",
        "data_tambah",
        "data_insert",
        "data_edit",
        "data_update",
        "data_hapus",
        "riwayat",
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
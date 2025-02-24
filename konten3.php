<?php
    if(!defined('INDEX3')) header('location:login.php');

    $halaman = [
        "dashboard3",
        "data_nasabah2",
        "riwayat2",
        "riwayat3",
        "tarik2",
        "tarik_proses2",
        "tabung2",
        "tabung_proses2",
        "riwayat_hapus2"
    ];

    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else {
        $hal = 'dashboard3';
    }

    foreach($halaman as $h) {
        if($hal == $h) {
            include "content3/$h.php";
            break;
        }
    }
?>
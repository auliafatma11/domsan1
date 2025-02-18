<?php
if (!defined('INDEX')) die("Akses ditolak!");

include "library/config.php";

// Periksa apakah id tersedia dalam URL
if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];

    // Query untuk menghapus transaksi berdasarkan ID
    $query = mysqli_query($con, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");

    if ($query) {
        $pesan = "Data nasabah berhasil dihapus";
        echo "<script> window.location.href='?hal=riwayat&p=$pesan';</script>";
    } else {
        echo "<script>alert('Gagal menghapus riwayat transaksi!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('ID transaksi tidak ditemukan!'); window.history.back();</script>";
}
?>

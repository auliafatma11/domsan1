<?php
if (!defined('INDEX')) die("");

$id = mysqli_real_escape_string($con, $_GET['id_siswa']);

// Periksa apakah data siswa ada
$cek = mysqli_query($con, "SELECT * FROM user WHERE id_siswa = '$id'");


// Jika data ditemukan, lakukan penghapusan
$query = "DELETE FROM user WHERE id_siswa = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    $pesan = "Data Teller berhasil dihapus";
    echo "<script>
    window.alert('✅ Data berhasil dihapus');
    window.location.href='?hal=data_teller&p=$pesan';
    </script>";
} else {
    echo "❌ Tidak dapat menghapus data!<br>";
    echo mysqli_error($con);
}


?>
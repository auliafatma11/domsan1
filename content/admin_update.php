<?php
if (!defined('INDEX')) die("Akses ditolak!");
include "library/config.php";

// Tangkap data dari form
$id_siswa = $_POST['id_siswa'];
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = $_POST['password'];

// Jika password diubah, hash dulu sebelum disimpan
if (!empty($password)) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE user SET nama='$nama', username='$username', password='$password' WHERE id_siswa='$id_siswa'";
} else {
    $query = "UPDATE user SET nama='$nama', username='$username' WHERE id_siswa='$id_siswa'";
}

// Eksekusi query
if (mysqli_query($con, $query)) {
    echo "<script>
        alert('✅ Data admin berhasil diperbarui!');
        window.location.href='?hal=data_admin';
    </script>";
} else {
    echo "<script>
        alert('❌ Gagal memperbarui data admin!');
        window.history.back();
    </script>";
}
?>

<?php
if (!defined('INDEX')) die("Akses ditolak!");
include "library/config.php";

// Ambil data dari form
$nama = isset($_POST['nama']) ? mysqli_real_escape_string($con, $_POST['nama']) : '';
$username = isset($_POST['username']) ? mysqli_real_escape_string($con, $_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$role = isset($_POST['role']) ? mysqli_real_escape_string($con, $_POST['role']) : '2'; // Default 1 untuk nasabah
$no_induk = isset($_POST['no_induk']) && $_POST['no_induk'] !== '' ? mysqli_real_escape_string($con, $_POST['no_induk']) : NULL; // Bisa NULL

// Validasi input
if (empty($nama) || empty($username) || empty($password)) {
    echo "<script>
        alert('⚠️ Semua data harus diisi!');
        window.location.href='?hal=admin_tambah';
    </script>";
    exit;
}

// Hash password sebelum disimpan (lebih aman)
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Simpan ke database (`NULLIF` untuk menghindari string kosong)
$query = "INSERT INTO user (nama, username, password, role, no_induk, saldo) 
          VALUES ('$nama', '$username', '$password_hashed', '$role', " . ($no_induk ? "'$no_induk'" : "NULL") . ", 0)";

if (mysqli_query($con, $query)) {
    echo "<script>
        alert('✅ Admin berhasil ditambahkan!');
        window.location.href='?hal=data_admin';
    </script>";
} else {
    echo "<script>
        alert('❌ Gagal menambahkan admin: " . mysqli_error($con) . "');
        window.history.back();
    </script>";
}
?>

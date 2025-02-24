<?php
if (!defined('INDEX')) die("Akses ditolak!");
include "library/config.php";

// Ambil data dari form
$nama = isset($_POST['nama']) ? mysqli_real_escape_string($con, $_POST['nama']) : '';
$username = isset($_POST['username']) ? mysqli_real_escape_string($con, $_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$role = isset($_POST['role']) ? mysqli_real_escape_string($con, $_POST['role']) : '3'; // Default 1 untuk admin
$no_induk = isset($_POST['no_induk']) && $_POST['no_induk'] !== '' ? mysqli_real_escape_string($con, $_POST['no_induk']) : 'NULL';


// Validasi input
if (empty($nama) || empty($username) || empty($password)) {
    echo "<script>
        alert('⚠️ Semua data harus diisi!');
        window.location.href='?hal=teller_tambah';
    </script>";
    exit;
}

// Hash password sebelum disimpan
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Simpan ke database (gunakan '' bukan NULL jika kosong)
$query = "INSERT INTO user (nama, username, password, role, no_induk, saldo) 
          VALUES ('$nama', '$username', '$password_hashed', '$role', $no_induk, 0)";

if (mysqli_query($con, $query)) {
    echo "<script>
        alert('✅ Teller berhasil ditambahkan!');
        window.location.href='?hal=data_teller';
    </script>";
} else {
    echo "<script>
        alert('❌ Gagal menambahkan Teller: " . mysqli_error($con) . "');
        window.history.back();
    </script>";
}
?>

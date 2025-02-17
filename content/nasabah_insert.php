<?php
if (!defined('INDEX')) die("");

// Koneksi ke database
require 'library/config.php'; 

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$nama = mysqli_real_escape_string($con, $_POST['nama']);
$no_induk = trim(mysqli_real_escape_string($con, $_POST['no_induk']));
$kelas = mysqli_real_escape_string($con, $_POST['kelas']);
$username = $no_induk;

// 🔹 Cek apakah `no_induk` sudah ada
$query = "SELECT no_induk FROM user WHERE no_induk = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "s", $no_induk);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) { 
    echo "<script>
        alert('⚠️ No. Induk sudah terdaftar. Silakan gunakan nomor induk lain.');
        window.location.href='?hal=nasabah_tambah';
    </script>";
    exit;
}

mysqli_stmt_close($stmt);

// 🔹 Generate password otomatis (6 karakter random)
$password_plain = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
$role = 2;

// 🔹 Simpan data ke tabel `user`
if (empty($foto)) {
    $query = "INSERT INTO user (nama, no_induk, kelas, foto, saldo, username, password, role) 
              VALUES (?, ?, ?, '', 0, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssssi", $nama, $no_induk, $kelas, $username, $password_plain, $role);
} else {
    if (!in_array($tipe, ["image/jpeg", "image/jpg", "image/png"])) {
        echo "<script>
                alert('❌ Maaf, tipe file tidak didukung!');
                window.location.href='?hal=nasabah_tambah';
              </script>";
        exit;
    } elseif ($ukuran >= 1000000) {
        echo "<script>
                alert('❌ Ukuran file terlalu besar (lebih dari 1 MB)!');
                window.location.href='?hal=nasabah_tambah';
              </script>";
        exit;
    } else {
        $nama_foto = date('YmdHis') . ".jpg";
        move_uploaded_file($lokasi, "images/" . $nama_foto);

        $query = "INSERT INTO user (nama, no_induk, kelas, foto, saldo, username, password, role) 
                  VALUES (?, ?, ?, ?, 0, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ssssssi", $nama, $no_induk, $kelas, $nama_foto, $username, $password_plain, $role);
    }
}

// 🔹 Eksekusi query insert
if (mysqli_stmt_execute($stmt)) {
    echo "<script>
        alert('✅ Nasabah berhasil ditambahkan!');
        window.location.href='?hal=data_nasabah';
    </script>";
} else {
    echo "<script>
        alert('❌ Gagal menambah nasabah: " . mysqli_error($con) . "');
        window.history.back();
    </script>";
}

mysqli_stmt_close($stmt);
?>

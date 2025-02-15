<?php
if (!defined('INDEX')) die("Akses ditolak!");

// Koneksi database
include 'library/config.php';

// Ambil data dari form
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$no_induk = mysqli_real_escape_string($con, $_POST['no_induk']);
$kelas = mysqli_real_escape_string($con, $_POST['kelas']);
$role = isset($_POST['role']) ? mysqli_real_escape_string($con, $_POST['role']) : '2'; // Default 'user'

// Cek apakah No Induk sudah ada di database
$query = "SELECT * FROM user WHERE no_induk = '$no_induk'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<script>
    alert('⚠️ No. Induk sudah terdaftar. Gunakan nomor induk lain.');
    window.location.href='?hal=nasabah_tambah';
    </script>";
    exit;
}

// Proses Upload Foto
$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$nama_foto = "";
if (!empty($foto)) {
    // Cek tipe file harus jpg/png
    $tipe_valid = ["image/jpeg", "image/jpg", "image/png"];
    if (!in_array($tipe, $tipe_valid)) {
        echo "<script>alert('❌ Tipe file tidak didukung! Hanya JPG & PNG.'); window.location.href='?hal=nasabah_tambah';</script>";
        exit;
    }

    // Cek ukuran file
    if ($ukuran >= 1000000) {
        echo "<script>alert('❌ Ukuran file terlalu besar! Maks 1MB.'); window.location.href='?hal=nasabah_tambah';</script>";
        exit;
    }

    // Rename file agar unik
    $nama_foto = date('YmdHis') . "-" . basename($foto);

    // Pastikan folder `images/` ada
    if (!file_exists("images")) {
        mkdir("images", 0777, true);
    }

    // Pindahkan file
    if (!move_uploaded_file($lokasi, "images/" . $nama_foto)) {
        echo "<script>alert('❌ Gagal mengupload foto!'); window.location.href='?hal=nasabah_tambah';</script>";
        exit;
    }
}

// Simpan data ke database
$query = "INSERT INTO user (foto, nama, no_induk, kelas, saldo, role) 
          VALUES ('$nama_foto', '$nama', '$no_induk', '$kelas', '0', '$role')";

if (mysqli_query($con, $query)) {
    echo "<script>
    alert('✅ Data berhasil ditambah!');
    window.location.href='?hal=data_nasabah';
    </script>";
} else {
    echo "<script>
    alert('❌ Gagal menyimpan data!');
    </script>";
    echo mysqli_error($con);
}
?>

<?php
// Pastikan koneksi tersedia
if (!isset($con)) {
    die("Koneksi database tidak ditemukan!");
}

// Menampung nilai dari form, dengan validasi
$tanggal = $_POST['tanggal'];
$id_siswa = $_POST['id_siswa'] ?? '';
$nominal = $_POST['nominal'] ?? 0;
$keterangan = $_POST['keterangan'];
$kode_tr = 1;

// Validasi jika id_siswa atau nominal kosong
if (empty($id_siswa) || empty($nominal)) {
    die("Error: Data tidak lengkap!");
}

// Cek saldo awal dari user
$cek_saldo = "SELECT saldo FROM user WHERE id_siswa='$id_siswa'";
$query_cek_saldo = mysqli_query($con, $cek_saldo);
$data_saldo = mysqli_fetch_assoc($query_cek_saldo);

if (!$data_saldo) {
    die("Error: ID Siswa tidak ditemukan!");
}

$saldo_awal = $data_saldo['saldo'];
$saldo_akhir = $saldo_awal + $nominal;

// Query INSERT dengan format yang benar
$query_transaksi = "INSERT INTO transaksi (tanggal, id_siswa, kode_tr, nominal, keterangan, saldo_awal, saldo_akhir) 
                    VALUES ('$tanggal', '$id_siswa', '$kode_tr', '$nominal', '$keterangan', $saldo_awal, $saldo_akhir)";
$query1 = mysqli_query($con, $query_transaksi);

// Query UPDATE saldo user
$query_saldo = "UPDATE user SET saldo=$saldo_akhir WHERE id_siswa='$id_siswa'";
$query2 = mysqli_query($con, $query_saldo);

// Cek apakah query berhasil
if ($query1 && $query2) {
    echo "<script>
    window.alert('✅ Transaksi penyetoran berhasil');
    window.location.href='?hal=data_nasabah';
    </script>";
} else {
    echo "<script>
    window.alert('❌ Maaf, transaksi penyetoran gagal');
    window.location.href='?hal=data_nasabah';
    </script>";
}
?>

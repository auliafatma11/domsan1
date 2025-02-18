<?php

//menampung nilai variable $_POST
$tanggal    = $_POST['tanggal']; // Menggunakan fungsi PHP untuk mendapatkan tanggal saat ini
$saldo_awal = $_POST['saldo_awal'];
$id_siswa = $_POST['id_siswa'];
$nominal= $_POST['nominal'];
$keterangan = $_POST['keterangan'];
$kode_tr=2;

//mengambil nilai saldo awal dari tabel data_nasabh
// $query_saldo_awal="SELECT saldo FROM  data_nasabah WHERE id_nasabah=$id_nasabah";
// $data_saldo_awal= mysqli_fetch_row(mysqli_query($koneksi,$query_saldo_awal));
// $saldo_awal= intval($data_saldo_awal[0]);

//  var_dump($saldo_awal);


if($saldo_awal - $nominal < 10000){
    echo "<script>
    window.alert('Maaf , Penarikan gagal!\\nSisa saldo minimal adalah Rp. 10.000,-');
    window.location.href='?hal=data_nasabah';
    </script>";
} else{

//menampikan data_nasabah yang ber id.....
    $cek_saldo="SElECT saldo from user where id_siswa='$id_siswa'";
    $query_cek_saldo=mysqli_fetch_row(mysqli_query($con,$cek_saldo));
    $saldo_awal= $query_cek_saldo[0];

//menentukan saldo_akhir
$saldo_akhir= $saldo_awal - $nominal;

//menambahkan ke table transaksi
$query_transaksi = "INSERT INTO transaksi (tanggal, id_siswa, kode_tr, nominal, keterangan, saldo_awal, saldo_akhir) 
VALUES ('$tanggal', '$id_siswa', '$kode_tr', '$nominal', '$keterangan', $saldo_awal, $saldo_akhir)";

    $query1=mysqli_query($con,$query_transaksi);


//analogi transaksi tarik
    $query_saldo="UPDATE user SET saldo=$saldo_akhir WHERE id_siswa=$id_siswa";
    $query2=mysqli_query($con,$query_saldo);

//aksi jika query sukses maupun gagal
    if ($query1 && $query2){
        //mod : menambah action alert jika query berhasil
        echo "<script>
    window.alert('✅Transaksi penarikan berhasil');
    window.location.href='?hal=data_nasabah';
    </script>";
    } else {
//mod : menambah action alert jika query berhasil
        echo "<script>
window.alert('❌Maaf, transaksi penarikan gagal');
    window.location.href='?hal=data_nasabah';
    </script>";
    }
}


?>
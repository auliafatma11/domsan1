<?php
if(!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];


$nama = mysqli_real_escape_string($con, $_POST['nama']);
$no_induk = mysqli_real_escape_string($con, $_POST['no_induk']);
$kelas= $_POST['kelas'];
// $saldo= $_POST['saldo'];
$role= $_POST['role'];

$error = "";

// **🔍 Pengecekan apakah `no_induk` sudah ada**
$query = "SELECT * FROM user WHERE no_induk = '$no_induk'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    echo "<script>
    window.alert('⚠️ No. Induk sudah terdaftar. Silakan gunakan nomor induk lain.');
    window.location.href='?hal=nasabah_tambah';
    </script>";

}else{

    
if($foto == ""){
    // $query = "INSERT INTO user SET ";
    // $query .= "foto = '$foto', ";
    // $query .= "nama = '$nama', ";
    // $query .= "no_induk = '$no_induk', ";
    // $query .= "kelas = '$kelas' ";
    // $query .= "saldo = '0' ";
    // $query .= "role = '$role'";

    $query = "INSERT INTO user (foto, nama, no_induk, kelas, saldo, role) 
                  VALUES ('', '$nama', '$no_induk', '$kelas', '0', '$role')";
   
    $result = mysqli_query($con,$query);
}else{
        if($tipe != "image/jpeg" and $tipe != "image/jpg" and $tipe != "image/png") {
            $error ="<script>
                    window.alert('Maaf, tipe file tidak didukung!');
                    window.location.href='?hal=nasabah_tambah';
                    </script>";
        } elseif($ukuran >=1000000) {
            // echo $ukuran; 
            $error =    "<script>
                        window.alert('Ukuran file terlalu besar (lebih dari 1 MB)!');
                        window.location.href='?hal=nasabah_tambah';
                        </script>";
        } else {
            $nama_foto = date('YmdHis')."-".$foto;
            move_uploaded_file($lokasi, "images/".$nama_foto);
    
            // $query = "INSERT INTO user SET ";
            // $query .= "foto = '$nama_foto', ";
            // $query .= "nama = '$nama', ";
            // $query .= "no_induk = '$no_induk', ";
            // $query .= "kelas = '$kelas', ";
            // $query .= "saldo = '0' ";
            // $query .= "role = '$role'";

            $query = "INSERT INTO user (foto, nama, no_induk, kelas, saldo, role) 
                  VALUES ('', '$nama', '$no_induk', '$kelas', '0', '$role')";
    
            $result = mysqli_query($con,$query);
        }
    }
}

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='2; url=?hal=nasabah_tambah&id=$id'>";
    } elseif($query){
        echo "<script>
        window.alert('Data berhasil ditambah');
        window.location.href='?hal=data_nasabah';
        </script>";
    } else {
        echo "<script>
        window.alert('Tidak dapat menyimpan data !<br>');
        </script>";
        echo mysqli_error();
    }
    ?>



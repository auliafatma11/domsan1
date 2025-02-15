<?php
if(!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$id= $_POST['id'];
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$no_induk= $_POST['no_induk'];
$id_kelas= $_POST['kelas'];
$saldo =$_POST['saldo'];
$role =$_POST['role'];

$error = "";

if($foto == ""){
    $query = "UPDATE user SET ";
    $query .= "nama = '$nama', ";
    $query .= "no_induk = '$no_induk', ";
    $query .= "id_kelas = '$id_kelas', ";
    $query .= "saldo = '$saldo' ";
    $query .= "role = '$role' ";
    $query .= "WHERE id_siswa = '$id'";
   
    $result = mysqli_query($con,$query);
}else{
        if($tipe != "image/jpeg" and $tipe != "image/jpg" and $tipe != "image/png") {
            $error ="<script>
                    window.alert('Maaf, tipe file tidak didukung!');
                    window.location.href='?hal=data_tambah';
                    </script>";
        } elseif($ukuran >=1000000) {
            // echo $ukuran; 
            $error =    "<script>
                        window.alert('Ukuran file terlalu besar (lebih dari 1 MB)!');
                        window.location.href='?hal=data_tambah';
                        </script>";
        } else {
            // MENGHAPUS FOTO SEBELUMNYA
            $query = "SELECT * FROM data_siswa WHERE id_siswa = '$id'";
            $result = mysqli_query($con,$query);
            $data = mysqli_fetch_assoc($result);
    
            if(file_exists("images/$data[foto]")) {
                unlink("images/$data[foto]");
            }

            $nama_foto = date('YmdHis')."-".$foto;
            move_uploaded_file($lokasi, "images/".$nama_foto);
    
            $query = "UPDATE data_siswa SET ";
            $query .= "foto = '$nama_foto', ";
            $query .= "nama = '$nama', ";
            $query .= "no_induk = '$no_induk', ";
            $query .= "id_kelas = '$id_kelas', ";
            $query .= "saldo = '$saldo' ";
            $query .= "role = '$role' ";
            $query .= "WHERE id_siswa = '$id'";
    
            $result = mysqli_query($con,$query);
        }
    }

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='1; url=?hal=nasabah_edit&id=$id'>";
    } elseif($query){
        echo "<script>
        window.alert('Data berhasil diperbaharui');
        window.location.href='?hal=data_nasabah';
        </script>";
    } else {
        echo "<script>
        window.alert('Tidak dapat memperbaharui data !<br>');
        </script>";
        echo mysqli_error();
    }
    ?>



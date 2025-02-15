<?php
if(!defined('INDEX')) die("");

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


$query = "INSERT INTO user SET '";
$query .= "nama = '$nama', ";
$query .= "username = '$username', ";
$query .= "password = '$password', ";
$query .= "kelas = '', ";
$query .= "saldo = '', ";
$query .= "no_induk = '-', ";
$query .= "role = '$role', ";
$query .= "foto = '',";



$result = mysqli_query($con,$query);

if($result){
    echo "<script>
    window.alert('Berhasil Menambah Data');
    window.location.href='?hal=data_admin';
    </script>";
    
} else {
    echo "tidak dapat menyimpan data!<br>";
    echo mysqli_error();
}
?>

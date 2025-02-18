<?php
if(!defined('INDEX')) die("");

$id = $_GET['id_siswa'];
$foto = $_GET['foto'];

if(file_exists("images/$foto")) {
    unlink("images/$foto");
}

$query = "DELETE FROM user WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);

if($result){ 
    $pesan = "Data nasabah berhasil dihapus";
    echo "<script>
    window.location.href='?hal=data_nasabah&p=$pesan';
    </script>";
} else {
    echo "❌Tidak dapat menghapus data  !<br>";
    echo mysqli_error();
}

?>
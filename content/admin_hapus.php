<?php
if(!defined('INDEX')) die("");

$id = $_GET['id'];


$query = "DELETE FROM user WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);

if($result){
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='?hal=data_admin';
    </script>";
} else {
    echo "Tidak dapat menghapus data  !<br>";
    echo mysqli_error();
}

?>
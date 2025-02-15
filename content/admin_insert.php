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

// **Pastikan `role` tidak kosong dan sesuai dengan tipe data**
$role = isset($_POST['role']) ? mysqli_real_escape_string($con, $_POST['role']) : '1'; // Default 'admin'
$id_siswa = mysqli_real_escape_string($con, $_POST['id_siswa']); 

// **Pastikan nilai `role` valid (jika ENUM, sesuaikan dengan pilihan yang ada)**
$allowed_roles = ['1', '2']; // Sesuaikan dengan database
if (!in_array($role, $allowed_roles)) {
    die("<script>
        alert('Role tidak valid!');
        window.location.href='?hal=nasabah_edit&id=$id_siswa';
    </script>");
}



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

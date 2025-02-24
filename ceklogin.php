<?php
    session_start();
    include "library/config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $hasil = mysqli_query($con, $query);
    $data = mysqli_fetch_array($hasil);
    $jml = mysqli_num_rows($hasil);

    if($jml > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['role'] = $data['role'];

        if( $_SESSION['role']==1){
            header('location:index.php');
        }elseif( $_SESSION['role']==2){
            header('location:index2.php');
        }else {
            header('location:index3.php');
        }  
    }else {
        echo "<script>alert('Login Gagal!.'); window.location='login.php';</script>";
        exit();
    }

?>


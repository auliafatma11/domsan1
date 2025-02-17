<?php
    session_start();
    ob_start();

    include "library/config.php";

    if (empty($_SESSION['username']) OR empty($_SESSION['password'])) {
        echo "<script> window.location='landing.php';</script>";
        exit();
    }else {
        define('INDEX', true);


    // Cek apakah user login dan memiliki role admin
    if (!isset($_SESSION['username']) || $_SESSION['role'] !== '1') {
        echo "<script>alert('Akses ditolak! Anda bukan admin.'); window.location='login.php';</script>";
        exit();
}

    
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="logo/dom-san.png" />
<html>
<head>
  <?php include "parts/head.php"; ?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
  <?php include "parts/header.php"; ?>    
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <?php include "parts/sidebar.php"; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <?php include "konten.php" ?>
    </div>
    <!-- /.content-wrapper -->

  <!-- Main Footer -->
 
   <?php include "parts/footer.php"; ?>

</div>
<!-- ./wrapper -->

<?php include "parts/file-js.php"; ?>

</body>
</html>

<?php
    }
?>
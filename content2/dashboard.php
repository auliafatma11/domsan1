
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!defined('INDEX2')) die("Akses dilarang!");

// Pastikan koneksi ke database tersedia
include 'library/config.php'; 

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    die("Anda belum login!");
}

$username = $_SESSION['username'];

/// Cek struktur tabel user, sesuaikan kolomnya jika perlu
$query = mysqli_query($con, "SELECT nama, foto, kelas, saldo FROM user WHERE username = '$username' LIMIT 1");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $nama_nasabah = $data['nama'];
    $kelas_nasabah = $data['kelas'];
    $foto = $data['foto'] ? $data['foto'] : 'default.jpg';
    $saldo = number_format($data['saldo'], 0, ',', '.');
} else {
    die("Data pengguna tidak ditemukan!");
}
?>

 <!-- if (!defined( 'INDEX2')) die("");
 $username = isset($_POST['username']) ? $_POST['username'] : '';

 $nama_nasabah = mysqli_num_rows(mysqli_query($con,"SELECT nama FROM user where role=2 "));
 $jml_admin = mysqli_num_rows(mysqli_query($con,"SELECT * FROM user where role = 1"));
 $jml_transaksi = mysqli_num_rows(mysqli_query($con, "SELECT * FROM transaksi WHERE left(tanggal, 10) = (SELECT CURDATE())")); -->


<head>
  <title>Dasboard</title>
</head>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <center><div class="col-md-6"></center>
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?= $nama_nasabah; ?></h3>
              <!-- <h5 class="widget-user-desc">Founder &amp; CEO</h5> -->
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="images/<?= $foto; ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Saldo</h5>
                    <span class="description-text"> Rp <?= $saldo; ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Kelas</h5>
                    <span class="description-text"><?= $kelas_nasabah; ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
</section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info">
                <h4>Selamat Datang di Aplikasi <b>DOM-$AN</b> !</h4>

                <p>Dom-$an (Dompet Santri) adalah solusi cerdas bagi para santri untuk mengelola keuangan dengan lebih bijak dan aman di lingkungan pondok pesantren. Aplikasi ini dirancang untuk meminimalisir pemborosan serta menghindari risiko kehilangan uang tunai dengan sistem pencatatan yang rapi dan fitur transaksi yang praktis.</p>
            </div>
        </div>
    </div>
      
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
  
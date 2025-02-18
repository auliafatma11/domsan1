
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

// Query untuk mendapatkan data saldo, pemasukan, dan pengeluaran
$query = mysqli_query($con, "
    SELECT 
        saldo,
        (SELECT SUM(nominal) FROM transaksi WHERE kode_tr = 1 AND id_siswa = (SELECT id_siswa FROM user WHERE username = '$username')) AS pemasukan,
        (SELECT SUM(nominal) FROM transaksi WHERE kode_tr = 2 AND id_siswa = (SELECT id_siswa FROM user WHERE username = '$username')) AS pengeluaran
    FROM user 
    WHERE username = '$username' LIMIT 1");
$data = mysqli_fetch_assoc($query);

// Ambil nilai saldo, pemasukan, dan pengeluaran
if ($data) {
    // Pastikan nilai tidak null, jika null beri nilai 0
    $saldo = number_format($data['saldo'] ?? 0, 0, ',', '.');
    $pemasukan = number_format($data['pemasukan'] ?? 0, 0, ',', '.');
    $pengeluaran = number_format($data['pengeluaran'] ?? 0, 0, ',', '.');
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
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info">
                <h4>Selamat Datang di Aplikasi <b>DOM-$AN</b> !</h4>

                <p>Dom-$an (Dompet Santri) adalah solusi cerdas bagi para santri untuk mengelola keuangan dengan lebih bijak dan aman di lingkungan pondok pesantren. Aplikasi ini dirancang untuk meminimalisir pemborosan serta menghindari risiko kehilangan uang tunai dengan sistem pencatatan yang rapi dan fitur transaksi yang praktis.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= $saldo ?></h3>

                    <p>SALDO</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?= $pemasukan ?></h3>

                    <p>PEMASUKAN</p>
                </div>
                <div class="icon">
                    <i class="ion ion-plus"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $pengeluaran ?></h3>

                    <p>PENGELUARAN</p>
                </div>
                <div class="icon">
                    <i class="ion ion-minus"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
</section>

    <!-- /.content -->
  
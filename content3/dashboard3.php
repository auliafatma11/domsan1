
<?php
 if (!defined( 'INDEX3')) die("");
 $jml_nasabah = mysqli_num_rows(mysqli_query($con,"SELECT * FROM user where role=2 "));
 $jml_admin = mysqli_num_rows(mysqli_query($con,"SELECT * FROM user where role = 1"));
 $jml_transaksi = mysqli_num_rows(mysqli_query($con, "SELECT * FROM transaksi WHERE left(tanggal, 10) = (SELECT CURDATE())"));
 ?>

<head>
  <title>Dasboard</title>
</head>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info">
                <h4>Selamat Datang di Aplikasi <b>DOM-$AN</b> !</h4>

                <p>Dom-$an (Dompet Santri) adalah solusi cerdas bagi para santri untuk mengelola keuangan dengan lebih bijak dan aman di lingkungan pondok pesantren. Aplikasi ini dirancang untuk meminimalisir pemborosan serta menghindari risiko kehilangan uang tunai dengan sistem pencatatan yang rapi dan fitur transaksi yang praktis.</p>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $jml_nasabah?></h3>

              <p>JUMLAH NASABAH</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
             <a href="?hal=data_nasabah2" class="small-box-footer"> Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$jml_transaksi?></h3>

              <p>TRANSAKSI HARI INI</p>
            </div>
            <div class="icon">
              <i class="ion ion-map"></i>
            </div>
            <a href="?hal=riwayat3" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
  
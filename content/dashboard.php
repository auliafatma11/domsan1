
<?php
 if (!defined( 'INDEX')) die("");
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
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $jml_nasabah?></h3>

              <p>JUMLAH NASABAH</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
             <a href="?hal=data_nasabah" class="small-box-footer"> Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$jml_transaksi?></h3>

              <p>TRANSAKSI HARI INI</p>
            </div>
            <div class="icon">
              <i class="ion ion-map"></i>
            </div>
            <a href="?hal=riwayat" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $jml_admin ?></h3>

              <p>ADMIN</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?hal=data_admin" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
  
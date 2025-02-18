<?php
 if(!defined('INDEX')) die("");

?>
<section class="content-header">
    <h1>Riwayat</h1>
</section>
<!-- Main content -->
<section class="content">
<?php 
if(isset($_GET['p'])){ ?>

    <div class="row">
        <div class="col-md-12">
          
            <!-- /.box-header -->
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                <?=$_GET['p']?>
              </div>

        </div>
        <!-- /.col -->
    </div>
<?php
}
?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <form class="pull-right" action="?hal=cetak_rekap_bulanan" method="post">
<table>
    <tr>
        <td> Bulan: </td>
        <td>
        <select class="form-control" name="bulan" id="bulan" required>
            <option value=""> Pilih Bulan </option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        </td>
        <td> Tahun: </td>
        <td>
        <select class="form-control" name="tahun" id="tahun" required>
            <option value=""> Pilih Tahun </option>
            <!-- <option value="2024">2024</option> -->
            <option value="2025">2025</option>
        </select>
        </td>
        <td>
        <button class="btn btn-primary">Cetak</button>
        </td>
    </tr>
</table>
</form>
                    <!-- <a class="btn btn-md btn-info" href="?hal=nasabah_tambah"> +</a> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Transaksi</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                     
<!-- memilih data yang ada di transaksi-->
                        <?php
                        $tampil = "SElECT * FROM view_transaksi ORDER BY id_transaksi DESC";
                        $query = mysqli_query($con,$tampil);
                        $no=0;
                        while ($data = mysqli_fetch_array($query)) {
                            //        var_dump($data);
                            $no++;
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['tanggal']; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?php
                                    if ($data['kode_tr']=="1"){echo "Tabung";}
                                    elseif ($data['kode_tr']=="2"){echo "Tarik";}
                                    ?></td>
                                <td><?= "Rp. ". number_format($data['nominal'],0,",", ".") . ",-"; ?></td>
                                <td><?=$data['keterangan']?></td>
                            <?php
                        
                        ?>
                                <td>
                                    <!-- Modifikasi tombol edit dan hapus-->
                                    <a class="btn btn-sm btn-danger" href="?hal=riwayat_hapus&id=<?= $data['id_transaksi'] ?>">
                                        <i class="fa fa-eraser"> Hapus </i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

</section>
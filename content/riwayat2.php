 
<?php
if(!defined('INDEX')) die("");
include "library/config.php";

//mengambil data nasabah dari database
$query = mysqli_query($con, "SELECT * FROM transaksi WHERE id_siswa='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>>
<section class="content-header">
    <center><h1>Riwayat</h1></center>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
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
                            <th>Kredit</th>
                            <th>Debit</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                   
<!-- memilih data yang ada di transaksi-->

            <?php
                $query = mysqli_query($con, "SELECT * FROM transaksi WHERE id_siswa='$_GET[id]'");
                $data = mysqli_fetch_array($query);
                $no= 0;
                while($data = mysqli_fetch_assoc($query)) {
                    $no++;

            ?>
                            <tr>
                            <td><?=$no;?></td>
                            <td><?=$data['tanggal']?></td>
                            <td><?=$data['nama']?></td>
                            <td><?=$data['kredit']?></td>
                            <td><?=$data['debit']?></td>
                            <td><?=$data['keterangan']?></td>

                                <td>
                                    <!-- Modifikasi tombol hapus-->
                                    <a class="btn btn-sm btn-danger" href="?hal=nasabah_hapus&id=<?= $data['id_siswa'] ?>">
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
<?php
if (!defined('INDEX')) die("Akses ditolak!");
include "library/config.php";
?>

<section class="content-header">
    <h1>Data Nasabah</h1>
</section>


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
                    <a class="btn btn-md btn-info" href="?hal=nasabah_tambah">+</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>No. Induk</th>
                                <th>Kelas</th>
                                <th>Saldo</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = mysqli_query($con, "SELECT id_siswa, nama, no_induk, kelas, saldo, foto FROM user WHERE role = '2' ORDER BY id_siswa DESC");
                            $no = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $no++;
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><img src="images/<?= $data['foto']; ?>" width="50"></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['no_induk']; ?></td>
                                <td><?= $data['kelas']; ?></td>
                                <td><?= "Rp. " . number_format(intval($data['saldo']), 0, ",", ".") . ",-"; ?></td>
                                <td>
                                    <a href="?hal=tabung&id_siswa=<?= $data['id_siswa']; ?>" class="btn btn-info">Kredit</a>
                                    <a href="?hal=tarik&id_siswa=<?= $data['id_siswa']; ?>" class="btn btn-info">Debit</a>
                                    <a href="?hal=riwayat2&id_siswa=<?= $data['id_siswa']; ?>" class="btn btn-info">Riwayat</a>
                                </td>
                                <td>
                                    <a href="?hal=nasabah_edit&id_siswa=<?= $data['id_siswa']; ?>" class="btn btn-warning">
                                        <i class="fa fa-pencil"> Edit</i>
                                    </a>
                                    <a href="?hal=nasabah_hapus&id_siswa=<?= $data['id_siswa']?>&foto=<?=$data['foto']?>" 
                                    class="btn btn-danger" 
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fa fa-trash"> Hapus</i>
                                    </a>
                                </td>

                            </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

<?php
 if (!defined( 'INDEX')) die("");
?>

<section class="content-header">
    <center><h1>Data Nasabah</h1></center>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-info" href="?hal=nasabah_tambah"> Tambah Nasabah</a>
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
                $query= "SELECT * FROM data_siswa ";
                $query.= "LEFT JOIN kelas ";
                $query.= "ON data_siswa.id_kelas = kelas.id_kelas ";
                $query.= "ORDER BY data_siswa.id_kelas DESC";
                $result= mysqli_query($con,$query);
                $no= 0;

                while($data = mysqli_fetch_assoc($result)) {
                    $no++;
            ?>
            <tr>
                <td><?=$no;?></td>
                <td><img src=images/<?=$data['foto']?> width="100"></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['no_induk']?></td>
                <td><?=$data['kelas']?></td>
                <td><?=$data['saldo']?></td>
                <td class="bank-buttons">
                    <a href="?hal=tariktabung_saldo&id=<?=$data['id_siswa']?>" class="btn-tarik">Transaksi</a>
                    <a href="?hal=riwayat&id=<?=$data['id_siswa']?>" class="btn-riwayat">Riwayat</a>
                </td>
                <td class="action-buttons">
                    <a href="?hal=data_edit&id=<?=$data['id_siswa']?>" class="btn-edit">Edit</a>
                    <a href="?hal=data_hapus&id=<?=$data['id_siswa']?>&foto=<?=$data['foto']?>" class="btn-hapus">Hapus</a>
                    
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
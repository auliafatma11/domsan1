<?php
include "library/config.php";

$query = "SELECT nama, username, password FROM user WHERE role = '2'";
$result = mysqli_query($con, $query);
?>

<section class="content-header">
    <center><h1 class="text-purple-active bg-primary" >Data Nasabah</h1></center>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-info" href="?hal=nasabah_tambah"> +</a>
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
                     
<!-- memilih data yang ada di user-->
            <?php
                $query= "SELECT * FROM user  where role = '2' ";

                $result= mysqli_query($con,$query);
                $no= 0;
                while($data = mysqli_fetch_assoc($result)) {
                    $no++;

            ?>
                            <tr>
                            <td><?=$no;?></td>
                            <td><img src="images/<?=$data['foto']?>" alt="" width="100"></td>
                            <td><?=$data['nama']?></td>
                            <td><?=$data['no_induk']?></td>
                            <td><?=$data['kelas']?></td>

<!--perintah untuk menambahkan Rp dan nol seterusnya pada nominal-->
                            <td><?= "Rp. ". number_format($data['saldo'],0,",", ".") . ",-"; ?></td>
                            <td>
                            <a class="btn btn-sm bg-purple" href="?hal=tabung&id=<?= $data['id_siswa'] ?>"> Kredit </a>
                            <a class="btn btn-sm btn-warning"
<?php

 //Fungsi untuk menon aktifkan tombol tarik 
 // jika saldo lebi kecil atau sama dengan 10000
if ($data['saldo'] <= 10000 ) {
    ?>
onclick="alert('Maaf, saldo tidak bisa ditarik!')"
<?php
}else {?>
href="?hal=tarik&id=<?= $data['id_siswa'] ?>"
    <?php
}
?> 
> Debit </a>
<a class="btn btn-sm btn-success" href="?hal=riwayat2&id=<?= $data['id_siswa'] ?>"> Riwayat </a>
                                </td>
                                <td>
                                    <!-- Modifikasi tombol edit dan hapus-->
                                    <a class="btn btn-sm btn-info" href="?hal=nasabah_edit&id=<?= $data['id_siswa'] ?>">
                                        <i class="fa fa-pencil"> Edit</i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="?hal=nasabah_hapus&id=<?=$data['id_siswa']?>&foto=<?=$data['foto']?>">
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
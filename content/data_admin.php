<?php
if(!defined('INDEX')) die("");
?>

<section class="content-header">
    <center><h1>Data Admin</h1></center>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-info" href="?hal=admin_tambah"> +</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                     
<!-- memilih data yang ada di user-->
            <?php
                $query= "SELECT * FROM user where role = '1' ";

                $result= mysqli_query($con,$query);
                $no= 0;
                while($data = mysqli_fetch_assoc($result)) {
                    $no++;

            ?>
                            <tr>
                            <td><?=$no;?></td>
                            
                            <td><?=$data['nama']?></td>
                                <td>
                                    <!-- Modifikasi tombol edit dan hapus-->
                                    <!-- <a class="btn btn-sm btn-info" href="?hal=admin_edit&id=<?= $data['id_siswa'] ?>">
                                        <i class="fa fa-pencil"> Edit</i>
                                    </a> -->
                                    <a class="btn btn-sm btn-danger" href="?hal=admin_hapus&id=<?= $data['id_siswa'] ?>">
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
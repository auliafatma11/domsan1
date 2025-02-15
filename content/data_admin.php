<?php
include "library/config.php";

$query = "SELECT nama, username, password FROM user WHERE role = '1'";
$result = mysqli_query($con, $query);
?>

<section class="content-header ">
    <center><h1 class=" bg-primary">Akun Admin</h1></center>
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
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Password</th> <!-- Bisa disembunyikan untuk keamanan -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysqli_query($con, "SELECT id_siswa, nama, username, password FROM user WHERE role = '1'");
    $no = 0;
    while ($data = mysqli_fetch_assoc($query)) {
        $no++;
    ?>
        <tr>
            <td><?=$no;?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['username']?></td>
            <td>*******</td> <!-- Gunakan enkripsi, jangan tampilkan password asli -->
            <td>
                <a class="btn btn-sm btn-warning" href="?hal=admin_edit&id=<?=$data['id_siswa']?>">
                    <i class="fa fa-edit"> Edit </i>
                </a>
                <a class="btn btn-sm btn-danger" href="?hal=admin_hapus&id=<?=$data['id_siswa']?>" onclick="return confirm('Yakin ingin menghapus admin ini?');">
                    <i class="fa fa-trash"> Hapus </i>
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
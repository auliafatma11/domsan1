<?php
if(!defined('INDEX')) die("");
?>

<section class="content-header ">
    <center><h1 class=" bg-primary">Akun Nasabah</h1></center>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a class="btn btn-md btn-info" href="?hal=tambah_nasabah"> +</a>
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
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysqli_query($con, "SELECT id_siswa, nama, username, password FROM user WHERE role = '2'");
    $no = 0;
    while ($data = mysqli_fetch_assoc($query)) {
        $no++;
    ?>
        <tr>
            <td><?=$no;?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['username']?></td>
            <td><?=$data['password']?></td> <!-- Gunakan enkripsi, jangan tampilkan password asli -->
            <td>
                <a class="btn btn-sm btn-danger" href="?hal=admin_hapus&id=<?=$data['id_siswa']?>" onclick="return confirm('Yakin ingin menghapus Nasabah ini?');">
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
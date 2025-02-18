<?php
include "library/config.php";
?>

<section class="content-header">
    <h1>Akun Admin</h1>
</section>

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
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

<?php
$query = mysqli_query($con, "SELECT * FROM user WHERE role = 1 ORDER BY id_siswa DESC"); // Hanya admin
$no = 0;
while ($data = mysqli_fetch_assoc($query)) {
    $no++;
    echo "<tr>
            <td>$no</td>
            <td>{$data['nama']}</td>
            <td>{$data['username']}</td>
            <td>
                <a href='?hal=admin_hapus&id={$data['id_siswa']}' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
            </td>
        </tr>";
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
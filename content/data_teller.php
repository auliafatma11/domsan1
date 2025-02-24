<?php
include "library/config.php";
?>

<section class="content-header">
    <h1>Akun Teller</h1>
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
                    <a class="btn btn-md btn-info" href="?hal=teller_tambah"> +</a>
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
$query = mysqli_query($con, "SELECT * FROM user WHERE role = 3 ORDER BY id_siswa DESC"); // Hanya admin
$no = 0;
while ($data = mysqli_fetch_assoc($query)) {
    $no++;
    echo "<tr>
            <td>$no</td>
            <td>{$data['nama']}</td>
            <td>{$data['username']}</td>
            <td>
                <a href='?hal=teller_hapus&id_siswa={$data['id_siswa']}' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
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
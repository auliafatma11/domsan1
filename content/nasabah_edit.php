<?php
if (!defined('INDEX')) die("");
include "library/config.php";

// Mengambil data nasabah dari database
if (!isset($_GET['id_siswa'])) {
    die("Error: ID Nasabah tidak ditemukan!");
}

$id_siswa = $_GET['id_siswa'];
$query = mysqli_query($con, "SELECT * FROM user WHERE id_siswa='$id_siswa'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Error: Data Nasabah tidak ditemukan!");
}
?>

<section class="content-header">
    <h1>Edit Nasabah</h1>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="?hal=nasabah_update" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">

                        <div class="form-group">
                            <label for="foto">Foto</label><br>
                            <input type="file" name="foto" id="foto"><br><br>
                            <img src="images/<?=$data['foto']?>" width="120" alt="">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>" required readonly>
                        </div>

                        <div class="form-group">
                            <label for="no_induk">No. Induk</label>
                            <input type="text" class="form-control" name="no_induk" id="no_induk" value="<?= $data['no_induk'] ?>" required readonly>
                        </div>

                        <div class="form-group">
                          <label for="kelas">Kelas</label> <br>

                          <!-- Pengecekan Gender -->
                          <?php
                          if($data['kelas']=="10"){
                              $a = " checked";
                              $b = "";
                              $c = "";
                          } elseif ($data['kelas']=="11") {
                            $a = " ";
                            $b = "checked";
                            $c = "";
                          }else {
                            $a = "";
                            $b = "";
                            $c = "checked";
                          }
                          ?>

                          <input type="radio" name="kelas" id="kelas" value="10" <?= $a ?>> 10
                          <input type="radio" name="kelas" id="kelas" value="11" <?= $b ?>> 11
                          <input type="radio" name="kelas" id="kelas" value="12" <?= $c ?>> 12
                          
                        </div>


                        <div class="form-group">
                            <label for="saldo">Saldo</label>
                            <input type="number" class="form-control" name="saldo" id="saldo" value="<?= $data['saldo'] ?>" required readonly>
                        </div>

                        <!-- <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" name="role" id="role">
                                <option value="1" <?= $data['role'] == '1' ? 'selected' : '' ?>>Admin</option>
                                <option value="2" <?= $data['role'] == '2' ? 'selected' : '' ?>>Nasabah</option>
                            </select>
                        </div> -->
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        <a class="btn btn-sm btn-primary" href="?hal=data_nasabah">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
</section>

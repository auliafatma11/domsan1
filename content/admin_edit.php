<?php
if (!defined('INDEX')) die("Akses ditolak!");
include "library/config.php";

// Ambil data admin berdasarkan id_siswa
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM user WHERE id_siswa='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Edit Admin
      </h1>
    </section>

    <!-- Main content -->
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
            <form action="admin_update.php" method="POST">
            <div class="box-body">
                <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password (Kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" name="password" class="form-control">
                </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-primary">Batal</button>
              </div>    
            </form>
          </div>
          <!-- /.box -->
          </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
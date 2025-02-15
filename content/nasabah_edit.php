 
<?php
if(!defined('INDEX')) die("");
include "library/config.php";

//mengambil data nasabah dari database
$query = mysqli_query($con, "SELECT * FROM user WHERE id_siswa='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>


<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tambah Nasabah
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
            <form action="?hal=nasabah_update" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  <div class="form-group">
                  <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                    <img src="images/<?=$data['foto']?>" width="100" alt="">
                  </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama']?>" >
                </div>
                <div class="form-group">
                    <label for="no_induk">No.Induk</label>
                    <input type="text" class="form-control" id="no_induk" name="no_induk" value="<?=$data['no_induk']?>" >
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label> <br>
                    <!-- Pengecekan kelas -->
                    <?php
        if($data['kelas']=="10"){
            $a = " checked";
            $b = "";
            $c = "";
        } elseif ($data['kelas']=="11") {
            $a = "";
            $b = " checked";
            $c = "";
        }else {
            $a = "";
            $b = "";
            $c = " checked";
        }
         ?>
                    <input type="radio" name="kelas" id="kelas" value="10" <?= $a ?> > 10 <br>
                    <input type="radio" name="kelas" id="kelas" value="11" <?= $b ?> > 11 <br>
                    <input type="radio" name="kelas" id="kelas" value="12" <?= $c ?> > 12
                </div>
                <div class="form-group">
                  <label for="saldo">Saldo</label>
                  <input type="number" class="form-control" id="saldo" name="saldo" value="<?=$data['saldo']?>" >
                </div>
                 <div class="form-group">
                  <label for="role">Role</label> <br>
                  <input type="checkbox" id="role" name="role" > 2
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-primary">Batal</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
<?php    
if(!defined('INDEX')) die("");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tambah Nasabah
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row mx-auto">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="?hal=nasabah_insert" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                  </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="no_induk">No.Induk</label>
                    <input type="text" class="form-control" id="no_induk" name="no_induk" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label> <br>
                    <input type="radio" name="kelas" id="kelas" value="10" required> 10 <br>
                    <input type="radio" name="kelas" id="kelas" value="11" required> 11 <br>
                    <input type="radio" name="kelas" id="kelas" value="12" required> 12
                </div>
                <!-- <div class="form-group">
                  <label for="saldo">Saldo</label>
                  <input type="number" class="form-control" id="saldo" name="saldo" >
                </div> -->
                <!-- <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" disabled>
                    <option value="2" >User</option>
                    <option value="1" >Admin</option>
                </select>
                </div> -->
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-primary" href="?hal=data_nasabah">Batal</a>
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
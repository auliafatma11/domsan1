<?php    
if(!defined('INDEX')) die("");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tambah Akun Nasabah
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
            <form action="?hal=update_nasabah" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="nama">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="nama">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
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
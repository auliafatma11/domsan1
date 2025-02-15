<?php

//mengambil data nasabah dari database
$query = mysqli_query($con,
    "SELECT * FROM user WHERE id_siswa='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<section class="content-header">
    <h1>Kredit</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <form action="?hal=tabung_proses" method="post" role="form">
                    <div class="box-body">
                        <!-- <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal"required>
                        </div> -->
                        <div class="form-group">
                            <label for="id_nasabah">Nama Nasabah</label>
                            <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">
                            <input type="hidden" name="saldo_awal" value="<?= $data['saldo'] ?>">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>" required readonly>

                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Masukkan nominal uang" required>
                        </div>
                        <div class="form-group">
                            <label for="nominal">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan" required>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a class="btn btn-danger" href="?hal=data_nasabah">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
</section>


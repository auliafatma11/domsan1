<section class="content-header">
    <h1>Riwayat Transaksi</h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Nasabah</th>
                            <th>Jenis Transaksi</th>
                            <th>Saldo Awal</th>
                            <th>Nominal Transaksi</th>
                            <th>Saldo Akhir</th>
                            <th>Keterangan</th>
                        </tr>
                        </thead>
                        <tbody>
<!-- mengambil data dari table transaksi-->
                        
                        <?php
                        // Query dengan IFNULL untuk menghindari NULL pada saldo_awal dan saldo_akhir
                        $tampil = "SELECT transaksi.*, 
                                          IFNULL(transaksi.saldo_awal, 0) AS saldo_awal, 
                                          IFNULL(transaksi.saldo_akhir, 0) AS saldo_akhir, 
                                          IFNULL(user.nama, '') AS nama, 
                                          IFNULL(transaksi.keterangan, '') AS keterangan 
                                   FROM transaksi 
                                   JOIN user USING (id_siswa)
                                   WHERE id_siswa = '".mysqli_real_escape_string($con, $_GET['id_siswa'])."'";
                        
                        $query = mysqli_query($con, $tampil);
                        $no = 0;

                        while ($data = mysqli_fetch_array($query)) {
                            $no++;
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= htmlspecialchars($data['tanggal'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?= htmlspecialchars($data['nama'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?= $data['kode_tr'] == "1" ? "Setor" : ($data['kode_tr'] == "2" ? "Tarik" : ""); ?></td>
                                <td><?= "Rp. " . number_format($data['saldo_awal'], 0, ",", ".") . ",-"; ?></td>
                                <td><?= "Rp. " . number_format($data['nominal'], 0, ",", ".") . ",-"; ?></td>
                                <td><?= "Rp. " . number_format($data['saldo_akhir'], 0, ",", ".") . ",-"; ?></td>
                                <td><?= htmlspecialchars($data['keterangan'], ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                            <?php
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
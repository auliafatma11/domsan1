<?php
include "library/config.php";

// Cek apakah parameter id_transaksi ada di URL
if (isset($_GET['id_siswa'])) {
    $id_siswa = $_GET['id_siswa'];  // Ambil nilai id_transaksi dari URL

    // Mengambil data transaksi dari view_transaksi berdasarkan id_transaksi
    $query = mysqli_query($con, "SELECT * FROM view_transaksi WHERE id_siswa='$id_siswa'");
    $data = mysqli_fetch_array($query);

    // Periksa apakah data ditemukan
    if (!$data) {
        echo "<script>alert('Data transaksi tidak ditemukan!');</script>";
        exit;
    }
} else {
    echo "<script>alert('ID Transaksi tidak ditemukan!');</script>";
    exit;
}

function tanggal_indonesia($tanggal) {
    $bulan = array (
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 
        'September', 'Oktober', 'November', 'Desember'
    );

    $var = explode('-', $tanggal);
    return $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
}
?>

<script>
    onload(window.print());
</script>

<section class="content-header">
    <!-- Tombol Kembali yang menyertakan id_transaksi dalam URL -->
    <a href="?hal=riwayat2&id_siswa=<?=$id_siswa?>" class="btn btn-sm btn-primary tombol-kembali">Kembali</a>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header">
                    <h3 class="text-center"><b>Slip Transaksi : 
                        <?php
                        if ($data['kode_tr'] == "1") { echo "Penyetoran"; }
                        elseif ($data['kode_tr'] == "2") { echo "Penarikan"; }
                        ?></b>
                    </h3>
                    <p class="text-center"><b>DOM-$AN | SMK BP Subulul Huda</b></p>
                </div>
                <div class="box-body">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td width="150em">Tanggal</td>
                                <td width="50em" class="text-center">:</td>
                                <td><?=$data['tanggal']?></td>
                            </tr>
                            <tr>
                                <td>No. induk</td>
                                <td class="text-center">:</td>
                                <td><?=$data['no_induk']?></td>
                            </tr>
                            <tr>
                                <td>Nama Nasabah</td>
                                <td class="text-center">:</td>
                                <td><?=$data['nama']?></td>
                            </tr>
                            <tr>
                                <td>Saldo Awal</td>
                                <td class="text-center">:</td>
                                <td><?= "Rp. " . number_format($data['saldo_awal'], 0, ",", ".") . ",-"; ?></td>
                            </tr>
                            <tr>
                                <td>Nominal Transaksi</td>
                                <td class="text-center">:</td>
                                <td><?= "Rp. " . number_format($data['nominal'], 0, ",", ".") . ",-"; ?></td>
                            </tr>
                            <tr>
                                <td>Saldo Akhir</td>
                                <td class="text-center">:</td>
                                <td><?= "Rp. " . number_format($data['saldo_akhir'], 0, ",", ".") . ",-"; ?></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td class="text-center">:</td>
                                <td><?=$data['keterangan']?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <tr class="text-center">
                            <td>
                                <br><br><u><small>Teller</small></u><br><br><br>(......................................)
                            </td>
                            <td>
                                <br><br><u><small>Nasabah</small></u><br><br><br>(......................................)
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>

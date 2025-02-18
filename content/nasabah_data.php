<?php
if (!defined('INDEX')) die("Akses ditolak!");
include "library/config.php";
?>

<section class="content-header">
    <h1>Akun Nasabah</h1>
</section>

<section class="content">
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>

<?php
$query = mysqli_query($con, "SELECT id_siswa, nama, username, password FROM user WHERE role = '2' ORDER BY id_siswa DESC");
$no = 0;
while ($data = mysqli_fetch_assoc($query)) {
    $no++;
    echo "<tr>
            <td>$no</td>
            <td>{$data['nama']}</td>
            <td>{$data['username']}</td>
            <td>{$data['password']}</td> 
        </tr>";
}
?>

                </tbody>
            </table>
        </div>
    </div>
</section>

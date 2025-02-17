<?php
if(!defined('INDEX')) die("");

// Koneksi ke database
include 'library/config.php'; // Sesuaikan dengan file koneksi

// **Ambil ID Siswa**
$id_siswa = isset($_POST['id_siswa']) ? mysqli_real_escape_string($con, $_POST['id_siswa']) : (isset($_GET['id_siswa']) ? mysqli_real_escape_string($con, $_GET['id_siswa']) : '');
if ($id_siswa == '') {
    die("<script>
        alert('ID Siswa tidak ditemukan!');
        window.location.href='?hal=data_nasabah';
    </script>");
}

// **Cek Data Lama**
$query_old = "SELECT * FROM user WHERE id_siswa = '$id_siswa'"; 
$result_old = mysqli_query($con, $query_old);
if (!$result_old || mysqli_num_rows($result_old) == 0) {
    die("<script>
        alert('Data siswa tidak ditemukan!');
        window.location.href='?hal=data_nasabah';
    </script>");
}
$data_old = mysqli_fetch_assoc($result_old);

// **Ambil Data Lama untuk Field yang Readonly**
$nama = $data_old['nama'];
$no_induk = $data_old['no_induk'];
$saldo = $data_old['saldo'];

// **Ambil Data Form**
$kelas = mysqli_real_escape_string($con, $_POST['kelas']);
$role = isset($_POST['role']) ? mysqli_real_escape_string($con, $_POST['role']) : '2';

// **Pastikan Role Valid**
$allowed_roles = ['1', '2'];
if (!in_array($role, $allowed_roles)) {
    die("<script>
        alert('❌Role tidak valid! Hanya bisa 1 (Admin) atau 2 (User)');
        window.location.href='?hal=nasabah_edit&id=$id_siswa';
    </script>");
}

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$error = "";

if ($foto == "") {
    // **Update Data Tanpa Foto**
    $query = "UPDATE user SET 
        kelas = '$kelas',  
        role = '$role' 
        WHERE id_siswa = '$id_siswa'";

    $result = mysqli_query($con, $query);
} else {
    // **Validasi File Upload**
    if ($tipe != "image/jpeg" && $tipe != "image/jpg" && $tipe != "image/png") {
        $error = "<script>
            alert('❌Maaf, tipe file tidak didukung!');
            window.location.href='?hal=nasabah_edit';
        </script>";
    } elseif ($ukuran >= 1000000) {
        $error = "<script>
            alert('Ukuran file terlalu besar (lebih dari 1 MB)!');
            window.location.href='?hal=nasabah_edit';
        </script>";
    } else {
        // **Hapus Foto Lama**
        if (file_exists("images/" . $data_old['foto'])) {
            unlink("images/" . $data_old['foto']);
        }

        // **Upload Foto Baru**
        $nama_foto = date('YmdHis');
        move_uploaded_file($lokasi, "images/" . $nama_foto);

        // **Update Data dengan Foto Baru**
        $query = "UPDATE user SET 
            foto = '$nama_foto',
            kelas = '$kelas', 
            role = '$role' 
            WHERE id_siswa = '$id_siswa'";

        $result = mysqli_query($con, $query);
    }
}

// **Cek Hasil Query**
if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='1; url=?hal=nasabah_edit&id=$id_siswa'>";
} elseif ($result) {
    echo "<script>
        alert('✅Data berhasil diperbarui!');
        window.location.href='?hal=data_nasabah';
    </script>";
} else {
    echo "<script>
        alert('❌Gagal memperbarui data!');
    </script>";
    echo mysqli_error($con);
}
?>

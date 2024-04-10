<?php
include_once('koneksi.php');

// Tangkap data dari form
$id = $_POST['id']; // Anda perlu menambahkan input hidden untuk menyimpan ID pasien
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$email = $_POST['email'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];

// Buat query update
$query = "UPDATE pasien SET nama='$nama', kode='$kode', email='$email', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', gender='$gender', alamat='$alamat', kelurahan_id='$kelurahan_id' WHERE id=$id";

// Eksekusi query
if ($dbh->query($query)) {
    // Redirect ke halaman pasien.php jika berhasil
    header('Location: pasien.php');
} else {
    // Tampilkan pesan jika gagal
    echo "Gagal menyimpan data";
}
?>

<?php
include_once('koneksi.php');

// Tangkap data dari form
$id = $_POST['id']; // Anda perlu menambahkan input hidden untuk menyimpan ID pasien
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

// Buat query insert (gunakan prepared statement)
$query = "UPDATE paramedik SET nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$kategori', telpon='$telpon', alamat='$alamat', unit_kerja_id='$unit_kerja_id' WHERE id=$id";

// Eksekusi query
if ($dbh->query($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal menyimpan data" . $dbh->errorInfo()[2];
}
?>


<?php
include_once('koneksi.php');

// Tangkap data dari form
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

// Buat query insert (gunakan prepared statement)
$query = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES ('$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat', '$unit_kerja_id')";

// Eksekusi query
if ($dbh->query($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal menyimpan data" . $dbh->errorInfo()[2];
}
?>


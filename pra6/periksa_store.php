<?php
include_once('koneksi.php');

// Tangkap data dari form
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];

// Buat query insert (gunakan prepared statement)
$query = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES ('$tanggal', '$berat', '$tinggi', '$tensi', '$keterangan', '$pasien_id', '$dokter_id')";

// Eksekusi query
if ($dbh->query($query)) {
    header('Location: periksa.php');
} else {
    echo "Gagal menyimpan data" . $dbh->errorInfo()[2];
}
?>


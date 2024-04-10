<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $dbh->quote($_POST['nama']);

// buat query insert
$query =  "INSERT INTO unit_kerja (`nama`) VALUES ($nama)";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: unit_kerja.php');
} else {
    echo "Gagal menyimpan data";
}
?>

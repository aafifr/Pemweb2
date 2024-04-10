<?php
include_once('koneksi.php');

// Tangkap data dari url
$id = $_GET['id'];

// Buat query delete
$query = "DELETE FROM periksa WHERE id = '$id'";

// Eksekusi query
if ($dbh->exec($query)) {
    header('Location: periksa.php');
} else {
    echo "Gagal menghapus data";
}
?>
<?php
include_once('koneksi.php');

// Tangkap data dari url
$id = $_GET['id'];

// Buat query delete
$query = "DELETE FROM pasien WHERE id = '$id'";

// Eksekusi query
if ($dbh->exec($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menghapus data";
}
?>
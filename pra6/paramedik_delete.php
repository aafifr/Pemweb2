<?php
include_once('koneksi.php');

// Tangkap data dari url
$id = $_GET['id'];

// Buat query delete
$query = "DELETE FROM paramedik WHERE id = '$id'";

// Eksekusi query
if ($dbh->exec($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal menghapus data";
}
?>
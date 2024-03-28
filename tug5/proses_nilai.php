<?php
include 'data_nilaimahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $nim = $_POST['nim'];

    $mahasiswa = new Mahasiswa($matkul, $nilai, $nim);
    $mahasiswa->displayResult();
} else {
    echo "Form submission method not allowed.";
}
?>

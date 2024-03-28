<?php
require_once('class_mahasiswa.php');

// Membuat objek mahasiswa
$mahasiswa = new Mahasiswa("0110123170", "Afif Ramadhan");
$mahasiswa->thn_angkatan = 2023;
$mahasiswa->prodi = "Sistem Informasi";
$mahasiswa->ipk = 3.8;

// Menampilkan hasil
echo "NIM: " . $mahasiswa->nim . "<br>";
echo "Nama: " . $mahasiswa->nama . "<br>";
echo "Tahun Angkatan: " . $mahasiswa->thn_angkatan . "<br>";
echo "Program Studi: " . $mahasiswa->prodi . "<br>";
echo "IPK: " . $mahasiswa->ipk . "<br>";
echo "Predikat IPK: " . $mahasiswa->predikat_ipk();
?>
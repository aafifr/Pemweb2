<?php
require_once('class_persegipanjang.php');

// Membuat object persegi panjang
$persegi_panjang = new PersegiPanjang(10, 5);

// Menampilkan hasil
echo "Pangjang: 10";
echo "<br> Lebar: 5";
echo "<br> Luas Persegi Panjang: " . $persegi_panjang->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegi_panjang->hitungKeliling();
?>
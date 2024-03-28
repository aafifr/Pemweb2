<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instalisasi object Lingkaran
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// panggil method
echo "<br> luas Lingkaran 1: " . $lingkar1->getLuas();
echo "<br> luas Lingkaran 2: " . $lingkar1->getLuas();

// panggil method
echo "<br> Keliling Lingkar 1: " . $lingkar1->getKeliling();
echo "<br> Keliling Lingkar 2: " . $lingkar2->getKeliling();
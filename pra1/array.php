<?php
// array indexing
$mhs1 = ['0111', 'Afif', 'Sistem Informasi', [3.5, 3.7, 3.8, 3.9, 4.0,]];

// panggil array
echo 'Nama: ' . $mhs1[1] . '<br/>'; //konkatenasi string
echo 'Prodi: ' . $mhs1[2] . '<br/>'; //string interpolation
echo 'IPS SEM 1: ' . $mhs1[3][2] . '<br/>';

?>
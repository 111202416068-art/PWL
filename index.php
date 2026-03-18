<?php
include "Mahasiswa.php";
echo "<h2>Data Mahasiswa:</h2>";
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
$mahasiswaTI->tampilkanData();

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
$mahasiswaSI->tampilkanData();

$mahasiswaBaru = new Mahasiswa();
$mahasiswaBaru->setData('A11.2023.12345', 'Budi Santoso', 'Teknik Informatika');
$mahasiswaBaru->tampilkanData();
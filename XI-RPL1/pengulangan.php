<?php

require "data.php"; //materi modular

// materi modular 
// include
// include_once

// require
// require_once

$a = 0;
while ($a < count($NamaSiswa)) {
    echo "Nomor : " . ($a + 1) . "<br>";
    echo "Nama : " . $NamaSiswa[$a]["nama"] . "<br>";
    echo "Umur : " . $NamaSiswa[$a]["umur"] . "<br>";
    echo "Alamat : " . $NamaSiswa[$a]["alamat"] . "<br>";
    echo "===========================================" . "<br>";

    $a++; // $++ sama dengan $a = $a + 1 
}
// $a = 1;
// foreach ($NamaSiswa as $siswa) {
//     echo "Nomor : " . $a++ . "<br>";
//     echo "Nama : " . $siswa["nama"] . "<br>";
//     echo "Umur : " . $siswa["umur"] . "<br>";
//     echo "Alamat : " . $siswa["alamat"] . "<br>";
//     echo "===================================" . "<br>";
// }

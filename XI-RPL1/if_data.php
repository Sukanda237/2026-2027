<?php

include 'data.php';

$a = 0;
while ($a < count($NamaSiswa)) {

    if ($NamaSiswa[$a]["umur"] == 17) {
        // echo "Nomor : " . ($a + 1) . "<br>";
        echo "Nama : " . $NamaSiswa[$a]["nama"] . "<br>";
        echo "Umur : " . $NamaSiswa[$a]["umur"] . "<br>";
        echo "Alamat : " . $NamaSiswa[$a]["alamat"] . "<br>";
        echo "===========================================" . "<br>";
    }
    $a++; // $++ sama dengan $a = $a + 1 
}

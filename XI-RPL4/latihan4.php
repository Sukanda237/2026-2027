<?php

$angka = [
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45]
];

$index = 0; //nilai awal
while ($index < count($angka)) { //nilai akhir
    for ($i = 0; $i < count($angka[$index]); $i++) {
        if ($i == 0 || $i == 3) {
            echo $angka[$index][$i] . " ";
        }
    }
    echo "<br>";
    $index++; //perubahan nilai
}
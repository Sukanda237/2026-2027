<?php

$angka = [
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45]
];

$i = 0; //nilai awal
while ($i < count($angka)) { //nilai akhir
    for ($j = 0; $j < count($angka[$i]); $j++) {
        if ( ($i==0 && $j== 0) || ($i==1 && $j==2)|| ($i==2 && $j==4) ){
            echo $angka[$i][$j] . " ";
        }
    }
    echo "<br>";
    $i++; //perubahan nilai
}
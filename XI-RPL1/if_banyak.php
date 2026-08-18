<?php

// $hari = "kamis";

// if ($hari == "senin") {
//     echo "Hari " . $hari . "<br>";
//     echo " Seragam : Putih Abu";
// } elseif ($hari == "selasa" || $hari == "kamis") {
//     echo "Hari " . $hari . "<br>";
//     echo " Seragam : Seragam Jurusan";
// } elseif ($hari == "rabu") {
//     echo "Hari " . $hari . "<br>";
//     echo " Seragam : Almet";
// } elseif ($hari == "jumat") {
//     echo "Hari " . $hari . "<br>";
//     echo " Seragam : Pramuka";
// }

$hari = "kamis";

switch ($hari) {
    case 'senin':
        echo "Hari " . $hari . "<br>";
        echo " Seragam : Putih Abu";
        break;
    case ($hari == 'selasa' || $hari == 'kamis'):
        echo "Hari " . $hari . "<br>";
        echo " Seragam : Seragam Jurusan";
        break;
    case 'rabu':
        echo "Hari " . $hari . "<br>";
        echo " Seragam : Almet";
        break;

    case 'jumat':
        echo "Hari " . $hari . "<br>";
        echo " Seragam : Pramuka";
        break;
    default:
        echo "Hari " . $hari . "<br>";
        echo " Seragam : bebas atau hari libur";
        break;
}

<?php
$total = 0;

for ($i = 1; $i <= 4; $i++) {
    $total = $total + $i; // atau bisa disingkat: $total += $i;
}

echo "Total: " . $total;
?>
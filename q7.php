<?php
$numeros = [2 , 5 , 7 ];

foreach ($numeros as $n) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "\n";
    }
}
?>


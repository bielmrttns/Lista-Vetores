<?php
$vetor = array();

echo "Digite 10 numeros inteiros:\n";

for ($i = 0; $i < 10; $i++) {
    $vetor[$i] = (int) readline();
}

$maior = $vetor[0];
$menor = $vetor[0];

for ($i = 1; $i < 10; $i++) {
    if ($vetor[$i] > $maior) {
        $maior = $vetor[$i];
    }
    if ($vetor[$i] < $menor) {
        $menor = $vetor[$i];
    }
}

echo "Maior valor: " . $maior . PHP_EOL;
echo "Menor valor: " . $menor . PHP_EOL;
?>
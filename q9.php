<?php

$nomes=["Duda ","Gabriel ","Isael ","Sara ","Sofia ","Paulo Miguel","Erik","Alicia"];
$Pesquisa="Duda ";
$encontrado = true;

foreach ($nomes as $nome) {
    if ($nome == $Pesquisa) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "O nome foi encontrado no vetor.";
} else {
    echo "O nome não foi encontrado no vetor.";
}
?>

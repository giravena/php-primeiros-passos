<?php
//printar na tela números ímpares de 1 a 100;

$contador = 1;

for ($contador = 1; $contador <= 100; $contador = $contador + 1) {
    if ($contador % 2 != 0) {
        echo "#$contador" . PHP_EOL;
    }
    
}
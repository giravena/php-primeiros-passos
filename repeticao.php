<?php

//para termos uma lista do 1 a 15 com quebra de linha
//enqanto o contador for menor ou igual a 15 > o php vai repetir o código

$contador = 1;

while ($contador <= 15){
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}
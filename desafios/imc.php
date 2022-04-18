<?php
//calcular IMC
//peso dividio pela altura ao quadrado

$peso = 53;
$altura = 1.64;

$imc = $peso / ($altura)**2; 
echo "O seu IMC é $imc" . PHP_EOL;
if ($imc > 30){
    echo "Você está com Obesidade";
} else if ($imc > 25 && $imc < 29.9){
    echo "Você está acima do peso.";
} else if ($imc > 18.5 && $imc < 24.9){
    echo "Você tem um IMC normal";
} else if ($imc < 18.5){
    echo "Você está abaixo do peso.";
};
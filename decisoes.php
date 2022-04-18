<?php
$idade = 21;
$nome = "Vinicius";

echo "Você só pode entrar se tiver mais de 18 anos." . PHP_EOL;

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar!";
}

// em PHP pode usar or também.
if ($idade == 18 or $idade > 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar!";
}

//além disso, para facilitar
if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar!";
}

//se a idade não é maior que 18: 

if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar!";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
};

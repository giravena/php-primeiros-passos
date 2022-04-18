<?php

//usar aspas duplas e simples?

$idade = 21;
echo 'Olá Mundo! Minha idade é ' .$idade;

//com aspas duplas ele consegue entender a variável dentro da string:
echo "Olá Mundo! A minha idade é $idade anos";

//para quebra de linhas

echo "Olá Mundo!\n";
echo "Eu tenho $idade anos";

//com end of line
echo "Olá Mundo!" . PHP_EOL;
echo "Eu tenho $idade anos";
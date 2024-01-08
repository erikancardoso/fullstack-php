<?php

//especificar um apóstrofo, escape-o com uma contrabarra (\)
echo 'Arnold disse uma vez: "I\'ll be back"'.PHP_EOL;
//especificar uma contrabarra literal, duplique-a (\\).
echo 'Você tem certeza em apagar C:\\*.*?'. PHP_EOL;
//apenas uma contrabarra sem sem o objetivo de ser literal ou apostrofo sera um simples caracter.
echo 'Isto não será substituído: \n uma nova linha'. PHP_EOL;
// mostra a variavel mas não o seu valor armazenado.
$tambem = 'mostra';
$mostraValor = 1;
echo 'Variáveis $tambem não $mostraValor'. PHP_EOL;

// aspas duplas
$nome = 'erika';
echo "meu nome \n é $nome" . PHP_EOL;
echo "horizontal \t horizontal".PHP_EOL;
echo "vertical \v vertical".PHP_EOL;
echo " aspas duplas \"OLÁ MUNDO\" ".PHP_EOL;

//ndice numericos
$string = 'string';
echo "O caractere no índice -2 é $string[-2].", PHP_EOL;
$string[-3] = 'o';
echo "Alterar o caractere no índice -3 para o , o resultao será: $string.", PHP_EOL;





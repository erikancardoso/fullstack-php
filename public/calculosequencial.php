<?php

function somarSequencial($n) {
    $array = []; //criar um array vazio
    $soma = 0; // inicializar uma variavel 

    for ($i = 1; $i <= $n; $i++) { // incalizando i, enquando i for menor que n, i acrescenta
        $soma += $i; // somando e armazenando o valor na variável
        $array[] = $soma; // acrescentarno o valor dentro do array.
    }

    return $array; // retorno do array
}

// Exemplo de uso
$numeroDeElementos = 6; //
$resultado = somarSequencial($numeroDeElementos); // crio uma variavel que ira receber a função e carescentar por parametro o numero de vezes que precisa repetir
print_r($resultado); // print_r exibe uma informação de forma legivel para humanos.

?>

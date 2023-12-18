<?php
//chamar uma funcao dentro de outra funcao 
function teste($nome)
{
    return 'olá, meu nome é: ' . $nome .PHP_EOL; // concatena através de ponto
}

function teste2($callback)
{
    if(is_callable($callback))
    {
        return $callback('erika') .PHP_EOL;
    } else
    {
        return 'não é callback'.PHP_EOL;
    }
}

$user = 'teste'; // callback aceita apenas string na sua chamada
echo teste2($user);//chamando a primeira função

/***************************************************************************************************************************************************/

/*usando a função Callback = call_user_func, chama o callback fornecido pelo primeiro parametro e passa o restante dos valores como argumento.*/

function segundoTeste($cliente)
{
    return 'Bem-vindo '. $cliente .PHP_EOL;
}


echo call_user_func('segundoTeste','wesley');
echo ''. PHP_EOL;

/***************************************************************************************************************************************************/


/*serve para customizar o comportamento da função receptora, é mais viável criar uma callback como função anonima para evitar sobrecarga no arquivo php*/
//- a função array_map(), mapeia a função de callback para cada elemento de array
echo 'Exemplo função array_map() '. PHP_EOL;

$names = array("João", "Maria", "Astolfinho");

print_r(array_map(function($name) 
{
    return "Olá, " . ucfirst($name) . "!";
}, $names));

echo ''. PHP_EOL;

// - Outro uso comum é a função usort(), permite ordenar array usando uma função de callback personalizada,
/*nesse caso é preciso classificar o array em ordem de idade crescente.é possível chamar usort() e passar em uma função anônima de callback 
que ordena o array por idade*/
echo 'Exemplo função usort() '. PHP_EOL;


$people = array(
    array("name" => "João", "age" => 39),
    array("name" => "Maria", "age" => 23),
    array("name" => "Astolfinho", "age" => 14)
);

usort($people, function($personA, $personB) {
    return ($personA["age"] < $personB["age"]) ? -1 : 1;
});

print_r($people);

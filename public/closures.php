<?php

//a Variavel $person que recebe uma função function anonima
// deve ser fechada com {};
//Closure usa metodos magicos que reservadas ao php, é possivel sobrescrever o comportamento.
$person = function ($name){
    return $name;
};
var_dump ($person('erika'));// imprimir o retorno
var_dump ($person); // imprimir o tipo da variável

/*********************************************************************************************************************************************************/
Class User
{
    public function __invoke()
    {
        return 'teste user';
    }
}
$user = new User;
$users = "teste variavel" .PHP_EOL;
var_dump ($user); //ler objetos, classes, variaveis
echo "$users";//imprimi variaveis como strings.
/*********************************************************************************************************************************************************/
function teste()
{
    $closures_teste = function()
    {
        return 'funcionou closures teste';
    };
    return $closures_teste;
}
var_dump (teste()());
/********************************************************************************************************************************************************/
function print_test($insert_name)
{
    $print_name = function() use ($insert_name)
    {
        return $insert_name;
    };
    return $print_name;
}

var_dump(print_test('hello test')());
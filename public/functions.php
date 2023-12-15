<?php

// conecção com banco de dados
function connection(){
    $pdo = new PDO('mysql:host=localhost;dbname=books', 'root','');
    return $pdo;
}
//acessando a tabela do banco
function getData($table){
    $connection = connection();
    $query = $connection->query("select * from {$table}"); 
    $query->execute();
    return $query->fetchAll();
}
//exibindo
var_dump(getData('comments')); // por parametro a tabela especifica
<?php

$name = 'Erika';
$age = 30;
$logged = false;

if($name && $age > 18 && $logged){
    echo   'é verdadeiro' . PHP_EOL;
} else {
    echo 'é falso' . PHP_EOL;
}
echo gettype ($name) . PHP_EOL;
echo gettype ($age) . PHP_EOL;
echo gettype ($logged) . PHP_EOL;

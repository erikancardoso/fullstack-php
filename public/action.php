<?php

$a = " hi " . htmlspecialchars($_POST['name']) . PHP_EOL;
$b =" you are ". (int)$_POST['age'] . " old years";


echo $a . $b;

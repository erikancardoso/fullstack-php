
<?php

//inicializar a sessão
session_start();

//visualizar a saida vinda de outro arquivo
require './session.php';

//criar a sessão
$_SESSION['curso'] = 'PHP';


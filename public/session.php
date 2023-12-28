<?php

//imprime a saida padrão que é por id
echo session_id();
echo '<hr>' .PHP_EOL;

//imprime o valor recebdo pela session 
echo (isset($_SESSION['curso'])) ? 'Session exist ' .$_SESSION['curso'] : 'session dont exist'; // operador ternario

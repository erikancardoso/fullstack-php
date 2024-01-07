<?php
//get variable to url
var_dump($_GET); //estou esperando uma requisição do tipo get 

/*A Query String Parameter é composta por uma chave e um valor, separados por um sinal de igual (=),ex: /?id=45
e múltiplos parâmetros, podem ser adicionados à URL, separados por um sinal de ampersand (&). /?id=45&email=test@email.com 
o resultado será um array() {}, ex: array(2) { ["id"]=> string(2) "45" ["email"]=> string(14) "test@email.com"  */

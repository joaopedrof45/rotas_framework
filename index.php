<?php
include_once("rotas/rotas.php");




// aqui ta fazendo da URl e dividindo em um array

$url = $_SERVER['REQUEST_URI'];

$novarota= new rotas();


//faz nova rota
$novarota->quebralink($url);

//imprime a quebra do link
$novarota->mostrainstancia();

$novarota->validarota();





// validação de diretorio
/*


*/






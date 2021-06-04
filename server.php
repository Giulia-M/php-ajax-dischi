<?php

include __DIR__ . '/partials/template/header.php';
include __DIR__ . '/function_getGenre.php';


//API DI BASE
header("Content-Type: application/json");


$listaDischiPerGenre = getGenre($listaDischi, isset($_GET["genre"]) ? $_GET["genre"] : "");
//prende array php e lo converte in stringa json 
echo json_encode($listaDischiPerGenre);





?>
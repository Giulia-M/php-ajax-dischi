<?php

include __DIR__ . '/partials/template/header.php';

//API DI BASE
header("Content-Type: application/json");

//prende array php e lo converte in stringa json 
echo json_encode($listaDischi);

//abbiamo creato il nostro API che ritorna dei dati 
?>
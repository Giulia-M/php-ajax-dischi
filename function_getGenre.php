<?php

include __DIR__ . '/partials/template/header.php';

function getGenre($listaDischi, $genreChosenUtent) {
    $lista = [];

    if ($genreChosenUtent == '') {
        return $listaDischi;
    }

    foreach($listaDischi as $disco) {
        //echo $genreChosenUtent . " " . $disco["genre"] . "<br/>";
        if($genreChosenUtent == $disco["genre"]) {
            $lista[] = $disco;
        }
    }
    
    return $lista; 
}
?>

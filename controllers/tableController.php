<?php

include('settings.php');

// -- Compteur, pour comprendre la logique
if(isset($_GET['chiffre'])){
    $chiffre = $_GET['chiffre'] + 1;
}else{
    $chiffre = 0;
};


// -- Encodage des lettres pour les avoir en string, puis décodage
$serializedLetter = serialize($letters);
$serializedLetter = urlencode($serializedLetter);

$letter = urldecode($serializedLetter);
$letter = unserialize($letter);


include('layout.php');

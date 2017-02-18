<?php

include('settings.php');

// -- Compteur, pour comprendre la logique
if(isset($_GET['chiffre'])){
    $chiffre = $_GET['chiffre'] + 1;
}else{
    $chiffre = 0;
};

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['serializedLetters'])){
        $letters = urldecode($_POST['serializedLetters']);
        $letters = unserialize($letters);
        if(isset($_POST['triedLetter'])){
            $letters[$_POST['triedLetter']] = true;
        }
    }
}


// -- Encodage des lettres pour les avoir en string
$serializedLetters = serialize($letters);
$serializedLetters = urlencode($serializedLetters);


include('layout.php');

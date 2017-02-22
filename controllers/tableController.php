<?php

include('settings.php');

// -- Compteur, pour comprendre la logique
if(isset($_GET['chiffre'])){
    $chiffre = $_GET['chiffre'] + 1;
}else{
    $chiffre = 0;
};

// - Dans le fichier words.txt, calculer le nb de lignes du tableau (count du file) et en retourner un aléatoirement entre 0 et sa length - 1 (index commence à 0)
// - Si il est déjà défini, ne pas le chercher à nouveau et prendre la value de l'input wordIndex
if(!isset($_POST['wordIndex'])) {
    $wordIndex = rand(0, count(file(DATAS_DIR.'/words.txt')) - 1);
} else {
    $wordIndex = ($_POST['wordIndex']);
}
var_dump($wordIndex);

// - Associer $wordToFind à l'index dans $wordIndex
$wordToFind = trim(file(DATAS_DIR.'/words.txt')[$wordIndex]);
var_dump($wordToFind);


// -- Décodage du tableau comprenant les lettres avec leurs statuts
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // -- Récupérer les lettres dans triedLetters (input de type hidden)
    if(isset($_POST['triedLetters'])) {
        $triedLetters = $_POST['triedLetters'];
    }
    if(isset($_POST['serializedLetters'])){
        $letters = urldecode($_POST['serializedLetters']);
        $letters = unserialize($letters);
        if(isset($_POST['triedLetter'])){
            if(!$letters[$_POST['triedLetter']]) {
                $triedLetters .= $_POST['triedLetter'];
                var_dump($triedLetters);
            }
            $letters[$_POST['triedLetter']] = true;
        }
    }
}

// -- Calcul du nombre d'essais restants
$remainingTrials -= strlen($triedLetters);


// -- Encodage des lettres pour les avoir en string
$serializedLetters = serialize($letters);
$serializedLetters = urlencode($serializedLetters);



include('layout.php');

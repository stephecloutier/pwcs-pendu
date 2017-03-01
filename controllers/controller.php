<?php

// Pour une différente structure de fichiers

/*
 * if($wordsArray = getWordsArray()){
 *   if($_SERVER['REQUEST_METHOD'] === 'POST') { 
 *       include('controllers/postController.php');
 *   } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') { 
 *      include('controllers/geController.php'); 
 *   } else { 
 *        die('Hey ça va pas la tête ? C\'est quoi cette méthode HTTP ?');
 *   }
 * } else {
 *   $error = '<p>Ooops, un problème est survenu lors de la récupération des mots</p>';
 * }
 */


    // - Dans le fichier words.txt, calculer le nb de lignes du tableau (count du file) et en retourner un aléatoirement entre 0 et sa length - 1 (index commence à 0)
    // - Si il est déjà défini, ne pas le chercher à nouveau et prendre la value de l'input wordIndex
    if(!isset($_POST['wordIndex'])) {
        $wordIndex = rand(0, count(file(SOURCE_NAME)) - 1);
    } else {
        $wordIndex = ($_POST['wordIndex']);
    }

    // - Associer $wordToFind à l'index dans $wordIndex
    $wordToFind = trim(file(SOURCE_NAME)[$wordIndex]);
    var_dump($wordToFind);


    // - Longueur du $wordToFind
    $wordLength = strlen($wordToFind);

    // -- Affichage des tirets pour le $wordToFind
    $replacementString = str_pad($replacementString, $wordLength, REPLACEMENT_CHAR);


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
                }
                $letters[$_POST['triedLetter']] = true;
            }
        }
    }

    // -- Contrôle pour ajouter la lettre dans $replacementString si elle correspond à une/des lettres du mot $wordToFind
    for($i = 0; $i < strlen($triedLetters); $i++) {
        // -- Calcul du nombre d'essais restants
        $isLetterFound = false;
        for($j = 0; $j < $wordLength; $j++) {
            if($triedLetters[$i] === strtolower($wordToFind[$j])) {
                $replacementString[$j] = $wordToFind[$j];
                $isLetterFound = true;
            }
        }
        if(!$isLetterFound){
            $remainingTrials--;
        }
    }

    // -- Contrôle pour savoir si le mot est trouvé

    if ($wordToFind === $replacementString) {
        $isWordFound = true;
    }

    // -- Calcul du nombre de $trials fait

    $trials = TOTAL_TRIALS - $remainingTrials;


    // -- Encodage des lettres pour les avoir en string
    $serializedLetters = serialize($letters);
    $serializedLetters = urlencode($serializedLetters);



    include('layout.php');



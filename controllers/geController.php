<?php
/**
 * Created by PhpStorm.
 * User: Stephe
 * Date: 23/02/17
 * Time: 11:08
 */


    // -- Récupération de l'index et du mot à trouver (GET)
    $wordIndex = getWordIndex($wordsArray);
    $wordToFind = getWordToFind($wordsArray, $wordIndex);

    // -- Longueur du $wordToFind
    $wordLength = strlen($wordToFind);

    // -- Affichage des tirets pour le $wordToFind
    $replacementString = getReplacementString($wordLength, REPLACEMENT_CHAR);

    // -- Encodage du tableau associatif des lettres
    $serializedLetters = serializeLetters($wordsArray);

<?php
/**
 * Created by PhpStorm.
 * User: Stephe
 * Date: 23/02/17
 * Time: 11:08
 */

// -- Récupération du tableau des lettres
$_SESSION['lettersArray'] = getLettersArray();

// -- Récupération de l'index et du mot à trouver (GET)
$_SESSION['wordIndex'] = getWordIndex($wordsArray);
$wordToFind = getWordToFind($wordsArray, $_SESSION['wordIndex']);

// -- Longueur du $wordToFind
$_SESSION['wordLength'] = strlen($wordToFind);

// -- Affichage des tirets pour le $wordToFind
$_SESSION['replacementString'] = getReplacementString($_SESSION['wordLength'], REPLACEMENT_CHAR);

// -- Initialiser Trials
$_SESSION['trials'] = 0;

// -- Initialiser triedLetters
$_SESSION['triedLetters'] = '';


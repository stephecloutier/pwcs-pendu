<?php

$letters = [
    'a' => false,
    'b' => false,
    'c' => false,
    'd' => false,
    'e' => false,
    'f' => false,
    'g' => false,
    'h' => false,
    'i' => false,
    'j' => false,
    'k' => false,
    'l' => false,
    'm' => false,
    'n' => false,
    'o' => false,
    'p' => false,
    'q' => false,
    'r' => false,
    's' => false,
    't' => false,
    'u' => false,
    'v' => false,
    'w' => false,
    'x' => false,
    'y' => false,
    'z' => false
];

define('SOURCE_NAME', 'datas/words.txt');
define('REPLACEMENT_CHAR', '-');
define('TOTAL_TRIALS', 8);
$error = '';
$replacementString = '';
$wordLength = 0; // $lettersCount dans le fichier du prof
$trials = 0;
$remainingTrials = TOTAL_TRIALS;
$triedLetters = '';
$isWordFound = false;


$serializedLetters = '';

$wordIndex = 0;

$wordToFind = '';

$isLetterFound = false;


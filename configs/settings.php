<?php

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


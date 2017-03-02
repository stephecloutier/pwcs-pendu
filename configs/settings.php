<?php

define('SOURCE_NAME', DATAS_DIR.'/words.txt');
define('REPLACEMENT_CHAR', '-');
define('TOTAL_TRIALS', 8);
$error = '';
$replacementString = '';
$wordLength = 0; // $lettersCount dans le fichier du prof
$trials = 0;
$remainingTrials = TOTAL_TRIALS;
$triedLetters = '';
$isWordFound = false;
$isLetterFound = false;
$triedLetter = '';


$wordIndex = 0;
$wordToFind = '';




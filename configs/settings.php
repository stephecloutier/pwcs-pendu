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
error = '';

$serializedLetters = '';

$triedLetters = '';

$remainingTrials = TOTAL_TRIALS;

$wordIndex = 0;

$wordToFind = '';

$wordLength = 0;

$dashedWord = '';

$isLetterFound = false;


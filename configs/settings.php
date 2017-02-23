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

$serializedLetters = '';

$triedLetters = '';

define('TOTAL_TRIALS', 8);

$remainingTrials = TOTAL_TRIALS;

$wordIndex = 0;

$wordToFind = '';

$wordLength = 0;

$dashedWord = '';
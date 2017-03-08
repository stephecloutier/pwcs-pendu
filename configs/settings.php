<?php

define('SOURCE_NAME', DATAS_DIR.'/words.txt');
define('REPLACEMENT_CHAR', '-');
define('TOTAL_TRIALS', 8);
$error = '';
$remainingTrials = TOTAL_TRIALS;
$isWordFound = false;
$isLetterFound = false;

$wordToFind = '';




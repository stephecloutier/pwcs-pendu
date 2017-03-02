<?php
/**
 * Created by PhpStorm.
 * User: Stephe
 * Date: 23/02/17
 * Time: 11:08
 */

    $serializedLetters = $_POST['serializedLetters'];
    $lettersArray = getLettersArray();
    $wordIndex = getWordIndex($wordsArray);
    $word = getWord($wordsArray, $wordIndex);
    $lettersCount = strlen($word);
    $replacementString = getReplacementString($lettersCount);
    $trials = 0;


    $triedLetter = $_POST['triedLetter'];
    $triedLetters = '';
    $lettersArray[$triedLetter] = false;
    $serializedLetters = serializeLetters($lettersArray);


    $wordFound = false;
    $remainingTrials = TOTAL_TRIALS - $trials;


    $letter = $_POST['triedLetter'];
    $triedLetters .= $letter;

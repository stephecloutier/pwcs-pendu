<?php
/**
 * Created by PhpStorm.
 * User: Stephe
 * Date: 23/02/17
 * Time: 11:10
 */


    function getLettersArray()
    {
        return [
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
    }

    function getWordsArray ()
    {
        return @file(SOURCE_NAME)?:false;
    }

    function getWordIndex($wordsArray)
    {
        return rand(0, count($wordsArray));
    }

    function getWordToFind($wordsArray, $wordIndex)
    {
        return strtolower(trim($wordsArray[$wordIndex]));
    }

    function getReplacementString($wordLength, $replacementChar)
    {
        return str_pad('', $wordLength, $replacementChar);
    }

    function serializeLetters($array)
    {
        return urlencode(serialize($array));
    }

    function unserializeLetters($serializedLetters)
    {
        return unserialize(urldecode($serializedLetters));
    }
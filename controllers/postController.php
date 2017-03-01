<?php
/**
 * Created by PhpStorm.
 * User: Stephe
 * Date: 23/02/17
 * Time: 10:46
 */


if(isset($_POST['triedLetters']) &&
   isset($_POST['triedLetter']) &&
   isset($_POST['serializedLetters']) &&
   isset($_POST['wordIndex']) &&
   isset($_POST['wordLength']) &&
   isset($_POST['trials'])
  ) {
        $triedLetter = $_POST['triedLetter'];
        $triedLetters = $_POST['triedLetters'];
        $serializedLetters = $_POST['serializedLetters'];
        $wordIndex = $_POST['wordIndex'];
        $wordLength = $_POST['wordLength'];
        $trials = $_POST['trials'];

        $letters = unserializeLetters($serializedLetters);

    }

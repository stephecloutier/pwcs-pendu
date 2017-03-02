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
   isset($_POST['replacementString']) &&
   isset($_POST['trials'])
  ) {
        $triedLetter = $_POST['triedLetter'];
        $triedLetters = $_POST['triedLetters'];
        $serializedLetters = $_POST['serializedLetters'];
        $wordIndex = $_POST['wordIndex'];
        $wordLength = $_POST['wordLength'];
        $replacementString = $_POST['replacementString'];
        $trials = $_POST['trials'];

        $lettersArray = unserializeLetters($serializedLetters);

        $wordToFind = getWordToFind($wordsArray, $wordIndex);

        // -- Contrôle de la lettre entrée par l'utilisateur : voir si elle n'est pas déjà présente et attribution de la valeur true

        if(!$lettersArray[$triedLetter]) {
                $triedLetters .= $triedLetter;
            }
        $lettersArray[$triedLetter] = true;


        // -- Contrôle différent, avec méthode pour les strings
        $isLetterFound = false;
        for($i = 0; $i < $wordLength; $i++) {
            $l = substr($wordToFind, $i, 1);
            if($triedLetter == $l) {
                $isLetterFound = true;
                $replacementString = substr_replace($replacementString, $l, $i, 1);
            }
        }

        if(!$isLetterFound){
            $trials++;
        } else {
            if ($replacementString === $wordToFind) {
                $isWordFound = true;
            }
        }

        $remainingTrials = TOTAL_TRIALS - $trials;

        $serializedLetters = serializeLetters($lettersArray);
}



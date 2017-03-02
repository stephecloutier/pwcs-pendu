<?php
/**
 * Created by PhpStorm.
 * User: Stephe
 * Date: 23/02/17
 * Time: 10:46
 */

/*if(!isset($_COOKIE['triedLetter'])) {
    die('Il faut autoriser les cookies sur votre navigateur pour jouer au jeu !');
}*/

if(isset($_COOKIE['cookie_datas']) &&
   isset($_POST['triedLetter'])
  ) {

        $triedLetter = $_POST['triedLetter'];

        $cookie_datas = decode($_COOKIE['cookie_datas']);


        $lettersArray = $cookie_datas['lettersArray'];
        $triedLetters = $cookie_datas['triedLetters'];
        $wordIndex = $cookie_datas['wordIndex'];
        $wordLength = $cookie_datas['wordLength'];
        $replacementString = $cookie_datas['replacementString'];
        $trials = $cookie_datas['trials'];

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


        $cookie_datas = encode(compact('lettersArray', 'triedLetters', 'wordIndex', 'wordLength', 'replacementString', 'trials'));

        setcookie('cookie_datas', $cookie_datas);
}



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

if(isset($_SESSION['lettersArray']) &&
   isset($_POST['triedLetter'])
  ) {


        $wordToFind = getWordToFind($wordsArray, $_SESSION['wordIndex']);

        // -- Contrôle de la lettre entrée par l'utilisateur : voir si elle n'est pas déjà présente et attribution de la valeur true

        if(!$_SESSION['lettersArray'][$_POST['triedLetter']]) {
            $_SESSION['triedLetters'] .= $_POST['triedLetter'];
            }
        $_SESSION['lettersArray'][$_POST['triedLetter']] = true;


        // -- Contrôle différent, avec méthode pour les strings
        $isLetterFound = false;
        for($i = 0; $i < $_SESSION['wordLength']; $i++) {
            $currentLetter = substr($wordToFind, $i, 1);
            if($_POST['triedLetter'] == $currentLetter) {
                $isLetterFound = true;
                $_SESSION['replacementString'] = substr_replace($_SESSION['replacementString'], $currentLetter, $i, 1);
            }
        }

        if(!$isLetterFound){
            $_SESSION['trials']++;
        } else {
            if ($_SESSION['replacementString'] === $wordToFind) {
                $isWordFound = true;
            }
        }

        $remainingTrials = TOTAL_TRIALS - $_SESSION['trials'];

}



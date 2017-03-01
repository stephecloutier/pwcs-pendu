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

        $lettersArray = unserializeLetters($serializedLetters);

        $wordToFind = getWordToFind($wordsArray, $wordIndex);

        $replacementString = getReplacementString($wordLength, REPLACEMENT_CHAR);


        // -- Contrôle de la lettre entrée par l'utilisateur : voir si elle n'est pas déjà présente et attribution de la valeur true

        if(!$lettersArray[$triedLetter]) {
                $triedLetters .= $triedLetter;
            }
            $lettersArray[$triedLetter] = true;



    // -- Contrôle pour ajouter la lettre dans $replacementString si elle correspond à une/des lettres du mot $wordToFind
        for($i = 0; $i < strlen($triedLetters); $i++) {
            // -- Calcul du nombre d'essais restants
            $isLetterFound = false;
            for($j = 0; $j < $wordLength; $j++) {
                if($triedLetters[$i] === strtolower($wordToFind[$j])) {
                    $replacementString[$j] = $wordToFind[$j];
                    $isLetterFound = true;
                }
            }
            if(!$isLetterFound){
                $remainingTrials--;
            }
        }


        // -- Contrôle pour savoir si le mot est trouvé
        if ($wordToFind === $replacementString) {
            $isWordFound = true;
        }

        // -- Calcul du nombre de $trials fait
        $trials = TOTAL_TRIALS - $remainingTrials;

        $serializedLetters = serializeLetters($lettersArray);
}



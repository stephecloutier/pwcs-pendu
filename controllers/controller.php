<?php


    // -- Vérification de la méthode du form. et include du fichier (ou erreur) correspondant(e)
    // -- && Récupération du tableau associatif des lettres

    if($wordsArray = getWordsArray()){
      if($_SERVER['REQUEST_METHOD'] === 'POST') { 
          include('controllers/postController.php');
      } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') { 
         include('controllers/geController.php'); 
      } else { 
           die('Hey ça va pas la tête ? C\'est quoi cette méthode HTTP ?');
      }
    } else {
      $error = '<p>Ooops, un problème est survenu lors de la récupération des mots</p>';
    }

    var_dump($wordToFind);


    // -- Décodage du tableau comprenant les lettres avec leurs statuts


            if(isset($_POST['triedLetter'])){
                if(!$letters[$_POST['triedLetter']]) {
                    $triedLetters .= $_POST['triedLetter'];
                }
                $letters[$_POST['triedLetter']] = true;
            }


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


    // -- Encodage des lettres pour les avoir en string
    $serializedLetters = serialize($letters);
    $serializedLetters = urlencode($serializedLetters);



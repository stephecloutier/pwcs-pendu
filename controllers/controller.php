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

    // -- Contrôle pour savoir si le mot est trouvé

    if ($wordToFind === $replacementString) {
        $isWordFound = true;
    }

    // -- Calcul du nombre de $trials fait

    $trials = TOTAL_TRIALS - $remainingTrials;


    // -- Encodage des lettres pour les avoir en string
    $serializedLetters = serialize($letters);
    $serializedLetters = urlencode($serializedLetters);



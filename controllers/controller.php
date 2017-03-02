<?php

    session_start();


    include(CONFIGS_DIR . '/settings.php');
    include(MODELS_DIR . '/model.php');


    // -- Vérification de la méthode du form. et include du fichier (ou erreur) correspondant(e)
    // -- && Récupération du tableau associatif des lettres

    if($wordsArray = getWordsArray()) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include(CONTROLLERS_DIR . '/postController.php');
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include(CONTROLLERS_DIR . '/geController.php');
        } else {
            die('Hey ça va pas la tête ? C\'est quoi cette méthode HTTP ?');
        }
    } else {
        $error = '<p>Ooops, un problème est survenu lors de la récupération des mots</p>';
    }

    var_dump($wordToFind);

    include(VIEWS_DIR . '/layout.php');


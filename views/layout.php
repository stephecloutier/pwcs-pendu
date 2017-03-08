<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le pendu</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <h1>Trouve le mot en moins de <?= TOTAL_TRIALS; ?> coups!</h1>
        <div>
            <p>Le mot à deviner compte <?= $_SESSION['wordLength']; ?> lettres : <?= $_SESSION['replacementString'] ?></p>
        </div>

        <div class="imgPendu">
            <img src="images/pendu<?= $_SESSION['trials']; ?>.gif" alt="Image de l'essai #<?= $_SESSION['trials']; ?>" />
        </div>

        <div>
            <p>Voici les lettres que tu as déjà essayées&nbsp;:
                <?php foreach($_SESSION['lettersArray'] as $letter => $status) {
                    if($status){
                        echo $letter;
                    }
                }
                ?>
            </p>
        </div>

        <?php if($remainingTrials != 0 && !$isWordFound): ?>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Il te reste <?= $remainingTrials; ?> tentatives avant de mourir&nbsp;!</legend>
                <div>
                    <label for="triedLetter">Choisis une lettre</label>
                    <select name="triedLetter" id="triedLetter">
                        <?php foreach($_SESSION['lettersArray'] as $letter => $status): ?>
                            <?php if(!$status): ?>
                            <option value="<?= $letter; ?>"><?= $letter; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>


                    <input type="submit" value="essayer cette lettre">
                </div>
            </fieldset>
        </form>
        <a href="./">Tu souhaites recommencer&nbsp;?</a>
        <?php elseif($isWordFound): ?>
        <div>
            <p>Bravo ! Tu as trouvé le mot <?= $wordToFind ?>! <a href="./">Recommencer&nbsp;?</a></p>
        </div>
        <?php else: ?>
        <div>
            <p>Tu es mort (Bien tristement)&nbsp;! Le mot était "<?= $wordToFind ?>". <a href="./">Recommencer&nbsp;?</a></p>
        </div>
    <?php endif; ?>

    </body>
</html>
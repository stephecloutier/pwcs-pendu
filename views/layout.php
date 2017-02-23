<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le pendu</title>
    </head>
    <body>
        <form action="index.php">
            <input type="submit" value="send">
            <input type="hidden" name="chiffre" value="<?= $chiffre; ?>">
        </form>
        <p><?= $chiffre; ?></p>


        <h1>Trouve le mot en moins de <?= TOTAL_TRIALS; ?> coups!</h1>
        <div>
            <p>Le mot à deviner compte <?= $wordLength; ?> lettres : <?= $dashedWord ?></p>
        </div>

        <div class="imgPendu">
            <?php if($remainingTrials === 8): ?>
            <img src="images/pendu0.gif" alt="../images/pendu0.gif" />
            <?php elseif($remainingTrials === 7): ?>
            <img src="images/pendu1.gif" alt="../images/pendu1.gif" />
            <?php elseif($remainingTrials === 6): ?>
            <img src="images/pendu2.gif" alt="../images/pendu2.gif" />
            <?php elseif($remainingTrials === 5): ?>
            <img src="images/pendu3.gif" alt="../images/pendu3.gif" />
            <?php elseif($remainingTrials === 4): ?>
            <img src="images/pendu4.gif" alt="../images/pendu4.gif" />
            <?php elseif($remainingTrials === 3): ?>
            <img src="images/pendu5.gif" alt="../images/pendu5.gif" />
            <?php elseif($remainingTrials === 2): ?>
            <img src="images/pendu6.gif" alt="../images/pendu6.gif" />
            <?php elseif($remainingTrials === 1): ?>
            <img src="images/pendu7.gif" alt="../images/pendu7.gif" />
            <?php elseif($remainingTrials === 0): ?>
            <img src="images/pendu8.gif" alt="../images/pendu7.gif" />
            <?php endif; ?>
        </div>

        <div>
            <p>Voici les lettres que tu as déjà essayées&nbsp;:
                <?php foreach($letters as $letter => $statut) {
                    if($statut){
                        echo $letter;
                    }
                }
                ?>
            </p>
        </div>

        <?php if($wordToFind == $dashedWord): ?>

        <?php endif; ?>

        <?php if($remainingTrials != 0 && $wordToFind !== $dashedWord): ?>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Il te reste <?= $remainingTrials; ?> tentatives avant de mourir&nbsp;!</legend>
                <div>
                    <label for="triedLetter">Choisis une lettre</label>
                    <select name="triedLetter" id="triedLetter">
                        <?php foreach($letters as $letter => $status): ?>
                            <?php if(!$status): ?>
                            <option value="<?= $letter; ?>"><?= $letter; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="serializedLetters" value="<?= $serializedLetters; ?>">
                    <input type="hidden" name="triedLetters" value="<?= $triedLetters; ?>">
                    <input type="hidden" name="wordIndex" value="<?= $wordIndex; ?>">

                    <input type="submit" value="essayer cette lettre">
                </div>
            </fieldset>
        </form>
        <?php elseif($wordToFind == $dashedWord): ?>
        <div>
            <p>Bravo ! Tu as trouvé le mot <?= $wordToFind ?>! <a href="./">Recommencer&nbsp;?</a></p>
        </div>
        <?php else: ?>
        <div>
            <p>Tu es mort (Bien tristement)&nbsp;!  <a href="./">Recommencer&nbsp;?</a></p>
        </div>
    <?php endif; ?>

    </body>
</html>
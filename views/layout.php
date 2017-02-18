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


        <h1>Trouve le mot en moins de *x* coups!</h1>
        <div>
            <p>Le mot à deviner compte *x* lettres : *---------*</p>
        </div>

        <div class="imgPendu">
            <img src="#" alt="ImagesDuPendu" />
        </div>

        <div>
            <p>Voici les lettres que tu as déjà essayées&nbsp;: *x*</p>
        </div>

        <div>
            <p>*x*Bravo ! Tu as trouvé *ou pas* le mot !</p>
        </div>

        <form action="index.php" method="post">
            <fieldset>
                <legend>Il te reste *x* tentatives avant de mourir&nbsp;!</legend>
                <div>
                    <label for="triedLetter">Choisis une lettre</label>
                    <select name="triedLetter" id="triedLetter">
                        <?php foreach($letters as $letter => $statut): ?>
                            <?php if(!$statut): ?>
                            <option value="<?= $letter; ?>"><?= $letter; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="essayer cette lettre">
                </div>
            </fieldset>
        </form>
    </body>
</html>

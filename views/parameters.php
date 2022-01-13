<?php
require_once '../controllers/parameters-controller.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
    <div>
            <label for="myDesign">Design à afficher sur la page d'accueil :</label>
            <select class="form-select" aria-label="Default select example" name="myDesign">
                <option value=light <?= $_SESSION['KING']['myDesign'] == "light"
                    ? 'selected'
                    : '' ?>>light</option>
                <option value=dark <?= $_SESSION['KING']['myDesign'] == "dark"
                    ? 'selected'
                    : '' ?>>dark</option>
            </select>
        </div>
        <div>
            <label for="nbr">Nombre d'articles affichés sur la page d'accueil :</label>
            <select class="form-select" aria-label="Default select example" name="Article">
                <option value="6" <?= $_SESSION['KING']['nbr'] == 6
                    ? 'selected'
                    : '' ?>>6</option>
                <option value="9" <?= $_SESSION['KING']['nbr'] == 9
                    ? 'selected'
                    : '' ?>>9</option>
                <option value="12" <?= $_SESSION['KING']['nbr'] == 12
                    ? 'selected'
                    : '' ?>>12</option>

            </select>
        </div>
        <div>
            <p>Choix des sujets : </p>
            <div>
                <?php foreach ($flux as $key => $value): ?>
                <div>
                    <input class="form-check-input" type="checkbox" value="<?= $value ?>" id="flexCheckDefault1"
                        name="<?= $key ?>">
                    <!-- <?= in_array($key, $_SESSION['KING']['theme'])
                            ? 'checked'
                            : '' ?> -->
                    <label class="form-check-label" for="flexCheckDefault1"><?= $key ?></label>
                </div>
                <?php endforeach; ?>
            </div>
            <input type="submit" name="submit" value="Envoyer">
    </form>
<script>
        function doAction() {
            var max = 3;
            var z = 0;
            var checkboxes = document.getElementsByClassName("form-check-input");
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes.item(i).checked == true) {
                    z++
                    if (z > max) {
                        checkboxes.item(i).checked = false;
                    }
                }
            }
        }
    </script>

</body>


</html>
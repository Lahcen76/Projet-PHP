<?php
require_once '../controllers/parameters-controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        <div>
            <label for="nbr">Nombre d'articles affichés sur la page d'accueil :</label>
            <select class="form-select" aria-label="Default select example" name="Article">
                <option value="6" <?= $_SESSION['Param']['nbr'] == 6
                    ? 'selected'
                    : '' ?>>6</option>
                <option value="9" <?= $_SESSION['Param']['nbr'] == 9
                    ? 'selected'
                    : '' ?>>9</option>
                <option value="12" <?= $_SESSION['Param']['nbr'] == 12
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
                        name="<?= $key ?>" <?= in_array(
    $key,
    $_SESSION['Param']['theme']
)
    ? 'checked'
    : '' ?>>
                    <label class="form-check-label" for="flexCheckDefault1"><?= $key ?> </label>
                </div>
                <?php endforeach; ?>
            </div>
            <input type="submit" name="submit" value="Envoyer">

    </form>

</body>

</html>
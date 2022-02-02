<?php
require_once '../controllers/parameters-controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Document</title>
</head>

<body style="background-color:bisque;">

    <form class="container" method="POST">
        <div>
            <label class="m-2 row" for="myDesign">Design à afficher sur la page d'accueil :</label>
            <select class="form-select" aria-label="Default select example" name="myDesign">
                <option value="light" <?= $_SESSION['KING']['myDesign'] ==
                'light'
                    ? 'selected'
                    : '' ?>>light</option>
                <option value="dark" <?= $_SESSION['KING']['myDesign'] == 'dark'
                    ? 'selected'
                    : '' ?>>dark</option>
            </select>
        </div>
        <div>
            <label class="m-2 row" for="nbr">Nombre d'articles affichés sur la page d'accueil:</label>
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
        <div class="">
            <p class="mt-4 text-center">Choix des sujets : </p>
            <div>
                <?php foreach ($flux as $key => $value): ?>
                <div class="" style="margin-left: 120px;">
                    <input class="form-check-input m-1" type="checkbox" value="<?= $value ?>" id="flexCheckDefault1"
                        name="<?= $key ?>">

                    <label class="form-check-label m-1" for="flexCheckDefault1"><?= $key ?></label>
                </div>
                <?php endforeach; ?>
            </div>
            <input style="margin-left: 140px;" class="mt-5 text-center" type="submit" name="submit" value="Envoyer">

    </form>

</body>


</html>
<?php

require '../controllers/index-controller.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- <link rel="stylesheet" href="../assets/style/style<?= $_SESSION[
        'KING'
    ]['myDesign'][0] ?>.css"> -->

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>ProjetPHP</title>
</head>

<body>

    <body>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= $xml->channel->item->enclosure[
                        'url'
                    ] ?>" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="<?= $xml2->channel->item->enclosure[
                        'url'
                    ] ?>" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="<?= $xml3->channel->item->enclosure[
                        'url'
                    ] ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <nav class="navbar navbar-dark navbar-<?= $_SESSION['KING'][
            'myDesign'
        ][0] ?> bg-primary fixed-bottom">
            <div class="container-fluid text-lowercase">
                <a class="navbar-brand" href="pages.php"><?= $_SESSION['KING'][
                    'theme'
                ][0] ?></a>
                <a class="navbar-brand" href="pages.php"><?= $_SESSION['KING'][
                    'theme'
                ][1] ?></a>
                <a class="navbar-brand" href="pages.php"><?= $_SESSION['KING'][
                    'theme'
                ][2] ?></a>
                <a class="navbar-brand" href="parameters.php"><i class="fas fa-user-cog"></i></a>
            </div>
        </nav>
        <table class="table border border-white">
            <tbody id="infoModal">
                <?php
                $article = 1;
                foreach ($array_xml as $key => $value) { ?>

                <tr>
                    <td></td>
                    <td><?= $value->title ?></td>
                    <td class="align-middle"><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#guillaume-<?= $article ?>" data-title="<?= $value->title ?>"
                            data-link="<?= $value->link ?>" data-time="">Voir Article</button></td>
                    <td class="align-middle"><a class="btn btn-primary" href="<?= $value->link ?>">Vers Lien</a>
                    </td>
                </tr>

                <div class="modal fade" id="guillaume-<?= $article ?>" tabindex="-1" aria-labelledby="modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header m-auto">
                                <p id="titleModal" class="modal-title text-dark text-center h5" id="modalLabel">
                                    <?= $value->title ?></p>
                            </div>
                            <div class="modal-body text-center">
                                <img width="90%" id="imgModal" src="<?= $value
                                    ->enclosure['url'] ?>">
                            </div>
                            <div class="modal-body text-center">
                                <p id="descriptionModal" class="text-dark text-center h5 descModal">
                                    <?= $value->description ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div><?php $article++;}
                ?>
            </tbody>
        </table>

        <!-- footer -->
        <footer class="row justify-content-center container-fluid mt-4 border ">
            <div class="fs-6 col-md-3">
                <p>© 2022 Projet Final PHP</p>
            </div>
        </footer>

        <script src="../assets/script/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>
</body>

</html>
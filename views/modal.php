<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style/styleModal.css">
    <title>Fenêtre modale HTML5</title>

    <style>
    </style>
</head>

<body>
    <h1>Message d'erreur</h1>
    <p id="promptCompat">Votre navigateur ne pend pas en charge les balises <code>
            <dialog>
        </code></p>
    <dialog id="mydialog" open>
        Vous avez sélectionné plus de 3 sujets !!!<br />
        <div class="boutons"><button onclick="$dialog.close()">Fermer</button>
    </dialog>
    <?php header("Location: ../views/home.php") ?>
    <script>
        var $dialog = document.getElementById('mydialog');
        if (!('show' in $dialog)) {
            document.getElementById('promptCompat').className = 'no_dialog';
        }
        $dialog.addEventListener('close', function() {
            console.log('Fermeture. ', this.returnValue);
        });
    </script>
</body>
</html>
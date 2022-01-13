<?php
require "../controllers/parameters-controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>parameters</title>
</head>

<body>
    <h1>Vos paramètres</h1>
    <h1></h1>
    <form enctype="multipart/form-data" action="" method="post" class="">
        <h1></h1>
        <label for="choiceDesign">Choisez votre style : </label>
        <input list="choiceDesigns" name="choiceDesign" id="choiceDesign" />
        <datalist id="choiceDesigns">
            <option value="Light">
            <option value="Dark">
        </datalist>
        <h1></h1>
        <label for="choiceNumberPerPage">Choisez votre nombre d'article par page : </label>
        <input list="numberPerPages" name="choiceNumberPerPage" id="choiceNumberPerPage" />
        <datalist id="numberPerPages">
            <option value="6">
            <option value="9">
            <option value="12">
        </datalist>
        <p>Cochez 3 sujets sur 5 :</p>
        <label for="subject1">football</label>
        <input type="checkbox" name="subject1" id="subject1" class="subject" onClick="doAction()"></br>
        <label for="subject2">tennis</label>
        <input type="checkbox" name="subject2" id="subject2" class="subject" onClick="doAction()"></br>
        <label for="subject3">basket</label>
        <input type="checkbox" name="subject3" id="subject3" class="subject" onClick="doAction()"></br>
        <label for="subject4">rugby</label>
        <input type="checkbox" name="subject4" id="subject4" class="subject" onClick="doAction()"></br>
        <label for="subject5">cyclisme</label>
        <input type="checkbox" name="subject5" id="subject5" class="subject" onClick="doAction()"></br>
        <h1></h1>
        <input type="submit" name="submitButton" id="submitButton"></br>
   </form>
    <h1></h1>
    <button onclick="window.location.href='../views/home.php';">Retour</button></br>
    <h1></h1>
    <script>
        function doAction() {
            var max = 3;
            var z = 0;
            var checkboxes = document.getElementsByClassName("subject");
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
<?php
<<<<<<< HEAD
require_once '../controllers/pages-controller.php'; ?>
<!DOCTYPE html>
<html lang="en">

=======
require '../controllers/pages-controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
// pages.php
echo "Bonjour, voici le flus RSS Sport de BFM : " . "<br>";
$url = "https://rmcsport.bfmtv.com/rss/fil-sport"; //* ici l'adresse du flux RSS
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item) {
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    echo '<li> ' . $date . ' : <a href=" ' . $item->link . '">' . utf8_decode($item->title) . '</a> </li>';
}
echo '</ul>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/style/style<?= $_SESSION['KING']['myDesign'][0] ?>.css">

    <title>ProjetPHP</title>
</head>

<body>
<div class=" row justify-content-center mt-3 g-0">
<div class="card mb-3 mt-5" >
    <div class="row g-0 ">
        <div class="col-md-2">
            <img src="assets/img/soleil.jpeg.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-lg-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a type="submit" href="" value="Plus d'info" name="btn-submit" class=" btn btn-primary ">Plus d'info</a>
            </div>
        </div>
    </div>
</div>
</div>
=======
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../assets/style/style.css">
        <title>pages</title>
</head>

<body>
    <h2>ARTICLE 00007</h2>
>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b
</body>

</html>
<?php
// pages.php
echo "Bonjour, voici le flus RSS Sport de BFM : "."<br>";
$url = "https://rmcsport.bfmtv.com/rss/fil-sport"; //* ici l'adresse du flux RSS
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
$datetime = date_create($item->pubDate);
$date = date_format($datetime, 'd M Y, H\hi');
echo '<li> '.$date.' : <a href=" '.$item->link.'">'.utf8_decode($item->title).'</a> </li>';
}
echo '</ul>';
?>
     
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/style/style.css" rel="stylesheet" />
    <title>RSSVIEWER SPORT</title>
</head>

<body>
    <h1></h1>
    <button onclick="window.location.href='./home.php';">retour</button>
    <h1></h1>
</body>

</html>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$rss_link = 'https://rmcsport.bfmtv.com/rss/fil-sport';
$rss_load = simplexml_load_file($rss_link);
$article = 1;

// Récupère une chaîne encodée JSON et la convertit en une variable PHP.

if (isset($_COOKIE['DA_COOCKIE'])) {
    $table_Cookie = json_decode($_COOKIE['DA_COOCKIE']);
    $_SESSION['KING'] = [
        'nbr' => $table_Cookie->nbr,
        'flux' => $table_Cookie->flux,
        'theme' => $table_Cookie->theme,
        'myDesign' => $table_Cookie->myDesign
    ];
}

// stocker les flus rss dans tableau

if (!isset($_SESSION['KING'])) {
    $_SESSION['KING'] = [
        'nbr' => [6, 9, 12],
        'flux' => [
            'football' => 'https://rmcsport.bfmtv.com/rss/football/',
            'tennis' => 'https://rmcsport.bfmtv.com/rss/tennis/',
            'basket_ball' => 'https://rmcsport.bfmtv.com/rss/basket/',
            'Rugby' => 'https://rmcsport.bfmtv.com/rss/rugby/',
            'Cyclisme' => 'https://rmcsport.bfmtv.com/rss/cyclisme/',
        ],
        'theme' => ['football' => 'football', 'tennis' => 'tennis', 'basket_ball' => 'basket_ball', 'Rugby' => 'Rugby', 'Cyclisme' => 'Cyclisme'],
        'myDesign' => ['light', 'dark']
    ];
}
$tempNbr = $_SESSION['KING']['nbr'][0] / 3;
//  Convertit un fichier XML en objet
if (!isset($_COOKIE['chgtParams'])) {
$xml = simplexml_load_file($_SESSION['KING']['flux']['football']);
$xml2 = simplexml_load_file($_SESSION['KING']['flux']['tennis']);
$xml3 = simplexml_load_file($_SESSION['KING']['flux']['basket_ball']);
}else{
    var_dump($_SESSION['KING']);
    var_dump($_COOKIE);
    $xml = simplexml_load_file($_SESSION['KING']['flux'][0]);
    $xml2 = simplexml_load_file($_SESSION['KING']['flux'][1]);
    $xml3 = simplexml_load_file($_SESSION['KING']['flux'][2]);
    $tempNbr = $_SESSION['KING']['nbr'][0] / 3;
    var_dump($xml);
    var_dump($xml2);
    var_dump($xml3);
    var_dump($tempnbr);
    sleep(180);
}
$array_xml = [];

for ($jp = 1; $jp <= $tempNbr; $jp++) {
    //    var_dump($xml->channel->item[$i]->pubDate);
    //    var_dump($xml->channel->item[$i]->enclosure);
    //    var_dump($xml->channel->item[$i]->description);
    $array_xml[] = $xml->channel->item[$jp];

    //    var_dump($xml2->channel->item[$i]->pubDate);
    //    var_dump($xml2->channel->item[$i]->enclosure);
    //    var_dump($xml2->channel->item[$i]->description);
    $array_xml[] = $xml2->channel->item[$jp];

    //    var_dump($xml3->channel->item[$i]->pubDate);
    //    var_dump($xml3->channel->item[$i]->enclosure);
    //    var_dump($xml3->channel->item[$i]->description);
    $array_xml[] = $xml3->channel->item[$jp];
}

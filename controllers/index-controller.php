<?php
session_start();

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
        'myDesign' => $table_Cookie->myDesign,
    ];
}
// stocker les flus rss dans tableau

if (!isset($_SESSION['KING'])) {
    $_SESSION['guillaume'] = [
        'nbr' => [6, 9, 12],
        'flux' => [
            'https://rmcsport.bfmtv.com/rss/football/',
            'https://rmcsport.bfmtv.com/rss/tennis/',
            'https://rmcsport.bfmtv.com/rss/basket/',
            'https://rmcsport.bfmtv.com/rss/rugby/',
            'https://rmcsport.bfmtv.com/rss/cyclisme/',
        ],
        'theme' => ['football', 'tennis', 'baskt_ball', 'Rugby', 'Cyclisme'],
        'myDesign' => ['light', 'dark'],
    ];
}

//  Convertit un fichier XML en objet
if (isset($_SESSION['KING']['theme'])) {
    $str1 = strval($_SESSION['KING']['theme'][0]);
    $str2 = strval($_SESSION['KING']['theme'][1]);
    $str3 = strval($_SESSION['KING']['theme'][2]);

    $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/' . $str1);
    $xml2 = simplexml_load_file('https://rmcsport.bfmtv.com/rss/' . $str2);
    $xml3 = simplexml_load_file('https://rmcsport.bfmtv.com/rss/' . $str3);
}
$array_xml = [];

for ($i = 0; $i < $_SESSION['KING']['nbr'] / 3; $i++) {
    $array_xml[] = $xml->channel->item[$i];

    $array_xml[] = $xml2->channel->item[$i];

    $array_xml[] = $xml3->channel->item[$i];
}
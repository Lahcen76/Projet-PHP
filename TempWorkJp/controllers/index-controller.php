<?php
if (session_status() == PHP_SESSION_NONE) {
       session_start();
// }else {
//      setcookie('PHPSESSID','',3600 * 24 * 30, '/');
//      setcookie('DA_COOCKIE', '', time() - 3600 * 24 * 30, '/');
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
            'https://rmcsport.bfmtv.com/rss/football/',
            'https://rmcsport.bfmtv.com/rss/tennis/',
            'https://rmcsport.bfmtv.com/rss/basket/',
            'https://rmcsport.bfmtv.com/rss/rugby/',
            'https://rmcsport.bfmtv.com/rss/cyclisme/',
        ],
        'theme' => ['football', 'tennis', 'basket_ball', 'Rugby', 'Cyclisme'],
        'myDesign' => ['light', 'dark']
    ];
}

//  Convertit un fichier XML en objet
$xml = simplexml_load_file($_SESSION['KING']['flux'][0]);
$xml2 = simplexml_load_file($_SESSION['KING']['flux'][1]);
$xml3 = simplexml_load_file($_SESSION['KING']['flux'][2]);

$array_xml = [];
$tempNbr = $_SESSION['KING']['nbr'][0]/3;

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
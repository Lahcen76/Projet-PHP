<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 $flux = [
     'Football' => 'https://rmcsport.bfmtv.com/football/',
     'Tennis' => 'https://rmcsport.bfmtv.com/tennis/',
     'basketbal' => 'https://rmcsport.bfmtv.com/basket/',
     'Rugby' => 'https://rmcsport.bfmtv.com/rugby/',
     'Cyclisme' => 'https://rmcsport.bfmtv.com/cyclisme/'
];
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
        'theme' => ['football' => 'football', 'tennis' =>'tennis', 'basket_ball' =>'basket_ball', 'Rugby' =>'Rugby', 'Cyclisme' =>'Cyclisme'],
        'myDesign' => ['light', 'dark']
    ];
}

if (!empty($_POST)) {
    $lien = [];
    $sport = [];
    $design = [];
    $i=0;
    foreach ($flux as $key => $value) {
        if (array_key_exists($key, $_POST)) {
            $lien[] = [$i => $_POST[$key]];
            $sport[] = [$i => [$key]];
            $design[] = $_POST['myDesign'];
            $i++;
           }
    }

    if (count($lien) != 3) {
        echo 'il faut 3 flux rss';
    } else {
        $_SESSION['KING'] = [
            'nbr' => $_POST['Article'],
            'flux' => $lien,
            'theme' => $sport,
            'myDesign' => $design,
        ];
        setcookie('DA_COOCKIE',json_encode($_SESSION['KING']),time() + 3600 * 24 * 30,'/');
        setcookie('chgtParams','Yes',time() + 3600 * 24 * 30,'/');
        header('Location: home.php');
        exit();
    }
}

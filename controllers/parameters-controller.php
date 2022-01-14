<?php

session_start();

$flux = [
    'football' => 'https://rmcsport.bfmtv.com/football/',
    'tennis' => 'https://rmcsport.bfmtv.com/tennis/',
    'basket' => 'https://rmcsport.bfmtv.com/basket/',
    'rugby' => 'https://rmcsport.bfmtv.com/rugby/',
    'cyclisme' => 'https://rmcsport.bfmtv.com/cyclisme/',
];

if (!isset($_SESSION['KING'])) {
    $_SESSION['KING'] = [
        'nbr' => [6, 9, 12],
        'flux' => [
            'https://rmcsport.bfmtv.com/football/',
            'https://rmcsport.bfmtv.com/tennis/',
            'https://rmcsport.bfmtv.com/basket/',
            'https://rmcsport.bfmtv.com/rugby/',
            'https://rmcsport.bfmtv.com/cyclisme/',
        ],
        'theme' => ['football', 'tennis', 'basket', 'rugby', 'cyclisme'],
        'myDesign' => ['light', 'dark'],
        'myDesign' => ['light', 'dark'],
    ];
}

if (!empty($_POST)) {
    $lien = [];
    $sport = [];
    $design = [];
    foreach ($flux as $key => $value) {
        if (array_key_exists($key, $_POST)) {
            $lien[] = $_POST[$key];
            $sport[] = $key;
            $design[] = $_POST['myDesign'];
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

        setcookie(
            'DA_COOCKIE',
            json_encode($_SESSION['KING']),
            time() + 3600 * 24 * 30,
            '/'
        );

        header('Location: home.php');
        exit();
    }
}
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
// }else {
//   setcookie('DA_COOCKIE', '', time() - 3600 * 24 * 30, '/');
}
$flux = [
    'Football' => 'https://rmcsport.bfmtv.com/football/',
    'Tennis' => 'https://rmcsport.bfmtv.com/tennis/',
    'basktbal' => 'https://rmcsport.bfmtv.com/basket/',
    'Rugby' => 'https://rmcsport.bfmtv.com/rugby/',
    'Cyclisme' => 'https://rmcsport.bfmtv.com/cyclisme/',
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
        'theme' => ['football', 'tennis', 'basket-ball', 'Rugby', 'Cyclisme'],
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
       // setcookie('DA_COOCKIE', '', time() - 3600 * 24 * 30, '/');
        header('Location: home.php');
        exit();
    }
}

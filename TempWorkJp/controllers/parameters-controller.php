<?php
<<<<<<< HEAD
if (session_status() == PHP_SESSION_NONE) {
    session_start();
// }else {
//   setcookie('DA_COOCKIE', '', time() - 3600 * 24 * 30, '/');
}
=======

session_start();

>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b
$flux = [
    'Football' => 'https://rmcsport.bfmtv.com/football/',
    'Tennis' => 'https://rmcsport.bfmtv.com/tennis/',
    'basktbal' => 'https://rmcsport.bfmtv.com/basket/',
    'Rugby' => 'https://rmcsport.bfmtv.com/rugby/',
    'Cyclisme' => 'https://rmcsport.bfmtv.com/cyclisme/',
];
<<<<<<< HEAD

if (!isset($_SESSION['KING'])) {
    $_SESSION['KING'] = [
        'nbr' => [6, 9, 12],
=======
if (!isset($_SESSION['Param'])) {
    $_SESSION['Param'] = [
        'nbr' => [9],
>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b
        'flux' => [
            'https://rmcsport.bfmtv.com/football/',
            'https://rmcsport.bfmtv.com/tennis/',
            'https://rmcsport.bfmtv.com/basket/',
<<<<<<< HEAD
            'https://rmcsport.bfmtv.com/rugby/',
            'https://rmcsport.bfmtv.com/cyclisme/',
        ],
        'theme' => ['football', 'tennis', 'basket-ball', 'Rugby', 'Cyclisme'],
        'myDesign' => ['light', 'dark'],
=======
        ],
        'theme' => ['football', 'tennis', 'baskt-ball'],
        'myDesign' => ['light','dark']
>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b
    ];
}

if (!empty($_POST)) {
    $lien = [];
    $sport = [];
    $design = [];
<<<<<<< HEAD

    foreach ($flux as $key => $value) {
        if (array_key_exists($key, $_POST)) {

            $lien[] = $_POST[$key];
            $sport[] = $key;
            $design[] = $_POST['myDesign'];
        }
=======
    
    foreach ($flux as $key => $value) {
        if (array_key_exists($key, $_POST)) {
            $lien[] = $_POST[$key];
            $sport[] = $key;
            $design[] = $_POST['myDesign'];
            }
>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b
    }

    if (count($lien) != 3) {
        echo 'il faut 3 flux rss';
    } else {
<<<<<<< HEAD
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
=======
         $_SESSION['Param'] = [            
            'nbr' => $_POST['Article'],
            'flux' => $lien,
            'theme' => $sport,
            'myDesign' => $design
        ];
        setcookie(
            'DA_COOCKIE',
            json_encode($_SESSION['Param']),
            time() + 3600 * 24 * 30,
            '/'
        );
        header('Location: home.php');
        exit();
    }
}
>>>>>>> a5aabdcce68241ef4ead395806c8a46cd5c59c6b

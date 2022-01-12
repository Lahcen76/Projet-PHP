<?php
session_start();

$rss_link = 'https://rmcsport.bfmtv.com/rss/fil-sport';
$rss_load = simplexml_load_file($rss_link);
$article = 1;

if (!isset($_SESSION['Param'])) {
    $_SESSION['Param'] = [
        'design' => 'light',
        'nbr' => 9,
        'flux' => ['https://rmcsport.bfmtv.com/football/',
            'https://rmcsport.bfmtv.com/tennis/',
            'https://rmcsport.bfmtv.com/basket/',
            'https://rmcsport.bfmtv.com/rugby/',
            'https://rmcsport.bfmtv.com/cyclisme/',

        ],
        'theme' => ['football', 'tennis', 'baskt_ball', 'rugby', 'cyclisme'],
    ];
}
?>
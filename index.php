<?php

require 'app/bootstrap.php';

$capture = new \mypdf\Capture\Capture;
$view = new \mypdf\Views\View;

// $capture->load('invoice.php', [
//     'number' => 676672,
//     'name' => 'Hassan Hussein',
//     'email' => 'hassan@email.com',
//     'phone_num' => '+2547889787',
//     'address' => '5 Road',
//     'city' => 'Thika',
//     'country' => 'Kenya'
// ]);

echo $view->render('invoice.php',
    [
        'number' => 676672,
        'name' => 'Hassan Hussein',
        'email' => 'hassan@email.com',
        'phone_num' => '+2547889787',
        'address' => '5 Road',
        'city' => 'Thika',
        'country' => 'Kenya'
    ]
);

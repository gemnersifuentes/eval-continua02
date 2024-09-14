<?php
// controllers/home.php

// Aquí puedes agregar la lógica del controlador 'home'
$data = "Bienvenido a la página principal";
$productos = [
    [
        'title' => 'Producto 1',
        'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        'enlace' => 'Last updated 1 mins ago',
        'image' => 'resources/img/card01.jpg',
    ],
    [
        'title' => 'Producto 2',
        'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        'enlace' => 'Last updated 2 mins ago',
        'image' => 'resources/img/card02.jpg',
    ],
    [
        'title' => 'Producto 3',
        'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        'enlace' => 'Last updated 3 mins ago',
        'image' => 'resources/img/card03.jpg',
    ],
    [
        'title' => 'Producto 4',
        'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        'enlace' => 'Last updated 4 mins ago',
        'image' => 'resources/img/card04.jpg',
    ],
    [
        'title' => 'Producto 5',
        'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        'enlace' => 'Last updated 5 mins ago',
        'image' => 'resources/img/card05.jpg',
    ],
    [
        'title' => 'Producto 6',
        'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        'enlace' => 'Last updated 6 mins ago',
        'image' => 'resources/img/card06.jpg',
    ],
];
$img_sliders = [
    'resources/img/slide01.jpg',
    'resources/img/slide02.jpg',
    'resources/img/slide03.jpg'
];
$logo = 'resources/img/logo.png';
// Incluir la vista correspondiente
require 'views/home.php';
?>

<?php

// Include app classes
include('classes/Route.php');
include('classes/Page.php');
include('classes/Portal.php');
include('classes/Component.php');

// Define base route
Route::add('/', function () {
    Page::render('home');
});
Route::add('/rules', function () {
    Page::render('rules');
});

// // Register a contact route
// Route::add('/contact', function () {
//     Page::render('contact');
// }, ['get', 'post']);

// // Register a imprint route
// Route::add('/imprint', function () {
//     Page::render('imprint');
// });

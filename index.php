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

<<<<<<< HEAD
<?php include 'components/footer.php'; ?>
=======
// Error pages
Route::pathNotFound(function ($path) {
    Page::render('404', 'default', ['path' => $path]);
});

Route::methodNotAllowed(function ($path, $method) {
    Page::render('405', 'default', ['path' => $path, 'method' => $method]);
});

// Run the router
Route::run('/');
>>>>>>> a2dbd2ef5b166758a847c5260e8db581765d79b6

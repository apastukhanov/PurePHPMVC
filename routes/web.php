<?php
    use App\WebRoutes\Route;
    use App\Controllers\Controller;


    Route::get('/hello', function() {
        echo 'Hello World!';
    });


    Route::get('/', [Controller::class, 'getHome']);

    Route::post('/', [Controller::class, 'getHome']);

    Route::get('/contacts', [Controller::class, 'getContacts']);

    Route::get('/table', [Controller::class, 'getTable']);

    Route::get('/cars', [Controller::class, 'getCar']);

    Route::get('/logout', [Controller::class, 'logout']);

    Route::get('/login', [Controller::class, 'login']);
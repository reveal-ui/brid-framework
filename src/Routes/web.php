<?php

Route::namespace('Reveal\Framework\Controllers')->as('framework::')->middleware('web')->group(function () {
    // Routes defined here have the web middleware applied
    // like the web.php file in a laravel project
    // They also have an applied controller namespace and a route names.

    Route::middleware('framework')->group(function () {
        // Routes defined here have the self-assigned middleware applied.
        // By default this middleware is empty.
    });
});


Route::get('/', function () {
    return view(jarvis_views('index'), ['theme_class' => 'front-page']);
});

Route::group(['prefix' => 'admin'], function ()
{

    Route::view('/', "framework::admin.dashboard");

    Route::resource('/content', '\Reveal\Framework\Controllers\Admin\ContentController');

    Route::resource('/users', '\Reveal\Framework\Controllers\Admin\UserController');

    Route::resource('/options', '\Reveal\Framework\Controllers\Admin\OptionsController');

    Route::resource('/logs', '\Reveal\Framework\Controllers\Admin\LogsController');

});

Route::get('/signin', function () {
    return view(jarvis_views('login'));
});

Route::get('/signup', function () {
    return view(jarvis_views('register'));
});

Route::get('/reset-password', function () {
    return view(jarvis_views('reset'));
});

Route::group(['prefix' => config('jarvis.base_url')], function () {
    Jarvis::install_routes();

    Jarvis::generator_routes();

    Jarvis::routes();
});


Dashauth::routes();

Backstory::routes();

Imgfly::routes();

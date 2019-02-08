<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $players = [
        'Aaron Rodgers',
        'Michael Thomas',
        'Devante Adams',
        'James Conner',
        'Sony Michel',
        'Curtis Samuel',
        'Zeurlein',
        'BALTIMORE'
    ];
    return view('welcome', [
        'players' => $players
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

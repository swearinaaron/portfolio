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

    $tasks = [
      'Go to the store',
      'Go to the market',
      'Go somewhere else!'
    ];

    return view('home', [
      'tasks' => $tasks
    ]);
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/references', function () {
    return view('references');
});

Route::get('/mywork', function () {
    return view('mywork');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/github', function () {
    return view('github');
});

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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');



/* Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy'); */


Route::resource('projects', 'ProjectsController')
;



/* Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo'=>'foobar'
        ]);
}); */

/* Route::get('/', function () {
    return view('welcome')->withTasks([
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    ]);
}); */

/* Route::get('/', function () {
    return 'Hi there';
});
 */

/* Route::get('/about', function () {
    return view('about'); //resourse/views/about.blade.php
});

Route::get('/contact', function () {
    return view('contact');
}); */
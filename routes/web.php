<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function () {
    // return view('welcome');
    echo "welcome to about page";
});

Route::get('/contact', function () {
    // return view('welcome');
    echo "welcome to contact page";
});

//passing parameter in routes
Route::get('/post/{id}', function ($id) {
    echo "this is post number " . $id;
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    echo "this is post number " . $id . " " . $name;
});

//naming routes
Route::get('/contactadmin/home/example', array('as' => 'admin.home', function () {
    // return view('welcome');
    $url = route('admin.home');
    return "this url is ". $url;
}));

<?php
namespace App\Http\Controllers;

use App\Models\Post;
use DB;
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

// Route::get('/about', function () {
//     // return view('welcome');
//     echo "welcome to about page";
// });

// Route::get('/contact', function () {
//     // return view('welcome');
//     echo "welcome to contact page";
// });

// //passing parameter in routes
// Route::get('/post/{id}', function ($id) {
//     echo "this is post number " . $id;
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     echo "this is post number " . $id . " " . $name;
// });

// //naming routes
// Route::get('/contactadmin/home/example', array('as' => 'admin.home', function () {
//     // return view('welcome');
//     $url = route('admin.home');
//     return "this url is ". $url;
// }));

// Route::get('/post', PostController::class . '@index');
// Route::get('/post/{id}', [PostController::class, 'index']);

// Route::resource('posts', PostController::class);

// Route::get('/contact', PostController::class . '@contact');

// Route::get('/post/{id}', [PostController::class, 'show_post']);

Route::get('/insert', function () {
    DB::insert('insert into posts(title, content) values(?,?)', ['Laravel is awsome', 'Laravel is the worst']);
});

// Route::get('/read', function () {
//     $results = DB::select('select * from posts where id=?', [1]);

// foreach ($results as $post) {
//     return $post->title;
// }

//     return $results;
// });

// Route::get('/update', function () {
//     $updated = DB::update('update posts set title = "update title" where id=?', [1]);
//     return $updated;
// });

// Route::get('/delete', function () {
//     $deleted = DB::delete('delete from posts where id=?', [1]);
//     return $deleted;
// });

/*

ELOQUENT

 */

// Route::get('/read', function () {
//     $posts = Post::all();
//     foreach ($posts as $post) {
//         # code...
//         return $post->title;
//     }
// });

Route::get('/find', function () {
    $post = Post::find(2);
    return $post->title;
});

//read data using condition
Route::get('/findWhere', function () {
    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});

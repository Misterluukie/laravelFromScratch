<?php

use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Exists;

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
    return view('home');
});

Route::get('/posts/{post}', function ($slug) {

    $post = ModelsPost::find($slug);

    return view("post", [
        "post" -> $post
    ]);

    // if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
    //     // abort(404);
    //     return redirect('/');
    // }

    // $post = cache()->remember("posts.{$slug}", 5, function () use ($path) {
    //     var_dump('hoi');
    //     return file_get_contents($path);
    // });

    // return view('post', ['post' => $post]);
})->where('post', '[A-z_\-]+');

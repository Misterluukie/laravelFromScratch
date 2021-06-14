<?php

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Exists;
use Spatie\YamlFrontMatter\YamlFrontMatter;
=======
use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Exists;
>>>>>>> 3802954a82ccef0790f67a2ea42c0a217ff2b4a1

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
<<<<<<< HEAD

    // return view('home', [
    //     'posts' => Post::all()
    // ]);

    $document = YamlFrontMatter::parseFile(
        resource_path('posts/my-fourth-post.html')
    );

    ddd($document);

=======
    return view('home');
>>>>>>> 3802954a82ccef0790f67a2ea42c0a217ff2b4a1
});

Route::get('/posts/{post}', function ($slug) {

<<<<<<< HEAD
    return view('post', [
        'post' => Post::find($slug)
    ]);

=======
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
>>>>>>> 3802954a82ccef0790f67a2ea42c0a217ff2b4a1
})->where('post', '[A-z_\-]+');

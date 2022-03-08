<?php

use App\Models\Post;
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

    if (Post::get()->count() === 0) {
        $post1 = Post::create(['name' => 'test1']);
        $post2 = Post::create(['name' => 'test2']);
        $post3 = Post::create(['name' => 'test3']);
        $post4 = Post::create(['name' => 'test4']);

        views($post1)->record();
        views($post1)->record();
        views($post1)->record();

        views($post2)->record();
        views($post2)->record();
        views($post2)->record();
        views($post2)->record();

        views($post4)->record();
        views($post4)->record();
        views($post4)->record();
        views($post4)->record();
        views($post4)->record();
        views($post4)->record();


        views($post3)->record();
        views($post3)->record();
        views($post3)->record();
        views($post3)->record();
    }

    return Post::orderByViews()->cursorPaginate(2);

});

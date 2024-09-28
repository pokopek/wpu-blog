<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['judul'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about',['judul'=>'halaman About']);
});

Route::get('/posts', function () {

    return view('posts',['judul'=>'Blog', 'posts'=>Post::filter(request
    (['search','category','author']))->latest()->paginate(5)->withQueryString()]);

});


Route::get('/posts/{post:slug}', function (Post $post){

    return view('post',['judul' => 'Single Post', 'post' => $post]);
    });

Route::get('/authors/{user:username}', function (User $user){

        return view('posts',['judul' => count($user->posts) .' Artikel By   '. $user->name, 'posts' => $user->posts]);
        });

Route::get('/categories/{category:slug}', function (Category $category){

        return view('posts',['judul' => 'Artikel In   '. $category->name, 'posts' => $category->posts]);
        });

Route::get('/contact', function () {
    return view('contact',['judul'=>'halaman contact']);
});

<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("prueba",function(){
// return "hola soyn una ruta de prueba";
// User::create(
//     ["name"=>"Paco",
//     "email"=>"paco@gmail.com",
//     "password"=>bcrypt("12345678")
//     ])
//     ;

//     return "Usuario creado";


// Phone::create(
// ["number"=>"12345678",
// "user_id"=>1
// ]);

// return "phone creado";

// $user= User::where("id",1)
// ->with("phone")
// ->first()
// ;

// $user= User::find(1);

// return $user->phone;


// $phone= Phone::find(1);

// return $phone->user;

// $post=Post::create(
//     [
//         "title"=>"Post 2"
//         ,"content"=>"Contenido 2"
//     ]);

// return $post;

// $comment= Comment::create(
//     [
//         "content"=>"Comentario 2",
//         "post_id"=>1
//     ]);

//     return $comment;


// $post= Post::find(1);
// return $post->comments;

// $post= Post::find(2);
// $post->comments()->create(
//     [
//         "content"=>"Un comentario de prueba",
//     ]);

//     return $post;


// $post=Post::find(1);

// $post->tags()

// $post->tags()->sync([1,2,4]);
// $post->tags()->attach([1,2,3]);
//$post->tags()->detach([1]);




//return $post->tags;

// return $post->tags;


$user= User::find(1);
// Phone::create(
//     [
//         "number"=>"121333334",
//         "phoneable_id"=>$user->id,
//         "phoneable_type"=>User::class,
//     ]);

// $user->phone()->create(
//     [
//         "number"=>"121333334",
//         //         "phoneable_id"=>$user->id,
//         //         "phoneable_type"=>User::class,
//     ]);
    return $user->phone;
});

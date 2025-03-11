<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Tag;
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

// $user = user::create(
//     [
//         "name"=>"Chin chin",
//         "email"=>"chin@gmail.com",
//         "password"=>bcrypt(123456789),
//     ]
// );

// $user= User::find(1);
// Phone::create(
//     [
//         "number"=>"121333334",
//         "phoneable_id"=>$user->id,
//         "phoneable_type"=>User::class,
//  ]);

//  return $user;
// $user->phone()->create(
//     [
//         "number"=>"121333334",
// ]);
    // return $user->phone;

//POST

    // $post=Post::create(["title"=>"Titulo","content"=>"Comentario"]);
    // return $post;


    // $post=Post::find(1);

    // Comment::create([
    //     "content"=>"Comentario",
    //     "commentable_id"=>$post->id,
    //     "commentable_type"=>Post::class
    // ]);

    // return $post;

//     $post->comments()->create(
//         [
// "content"=>"Este es un comnetario de prueba"
//         ]);

//     return $post->comments;

    // $comment=Comment::find(1);
    // return $comment->commentable;


    // $post=Post::find(1);


    // $post->tags()->attach([1,2,3]);
    // $post->tags()->detach([1]);
    // $post->tags()->sync([1,2,3]);

    // return $post;


});

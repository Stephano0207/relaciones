<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=
    [
        "title",
        "content"
    ];

    // Relacion de uno a muchos
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Relacon de muchos a muchos
    public function tags(){

        // return $this->belongsToMany(Tag::class,"post_tag");
        return $this->belongsToMany(Tag::class);
    }
}

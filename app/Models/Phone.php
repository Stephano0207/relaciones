<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table="phones";
    protected $fillable=
    [
        "number"
        ,"phoneable_id"
        ,"phoneable_type"
    ];

        // Relacion inversa polimorfica de uno a uno
    public function phoneable(){
        return $this->morphTo();
    }

    //Relacion inversa

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }





}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string("number");

            // $table->unsignedBigInteger("user_id");
            // $table->foreign("user_id")
            // ->references("id")
            // ->on("users")
            // // ->onDelete("set null")
            // ->onDelete("CASCADE")
            // ->onUpdate("CASCADE")
            // ;

            // $table->foreignId("user_id")
            // ->constrained()
            // ->onDelete("CASCADE")
            // ->onUpdate("CASCADE")
            // ;


            $table->morphs("phoneable");// se crea una relacion polimorfica de uno a uno

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};

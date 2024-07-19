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
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();
            $table->string('role',30);
            $table->integer('actor_act_id');
            $table->integer('movie_mov_id');
            $table->foreign('actor_act_id')->references('act_id')->on('actors')->onDelete('cascade');
            $table->foreign('movie_mov_id')->references('mov_id')->on('movies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_movie');
    }
};

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
        Schema::create('director_movie', function (Blueprint $table) {
            $table->id();
            $table->integer('director_dir_id');
            $table->integer('movie_mov_id');
            $table->foreign('director_dir_id')->references('dir_id')->on('directors')->onDelete('cascade');
            $table->foreign('movie_mov_id')->references('mov_id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('director_movie');
    }
};

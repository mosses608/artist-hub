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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('occupation');
            $table->string('artist_name');
            $table->string('nationality');
            $table->string('gender');
            $table->string('contact');
            $table->string('email');
            $table->string('brand')->nullable();
            $table->string('music_movie_type');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('you_tube');
            $table->string('profile')->nullable();
            $table->string('musician')->nullable();
            $table->string('director')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};

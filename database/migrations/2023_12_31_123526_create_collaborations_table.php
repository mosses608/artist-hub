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
        Schema::create('collaborations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('single')->nullable();
            $table->string('dfirst')->nullable();
            $table->string('dsecond')->nullable();
            $table->string('tfirst')->nullable();
            $table->string('tsecond')->nullable();
            $table->string('tthird')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborations');
    }
};

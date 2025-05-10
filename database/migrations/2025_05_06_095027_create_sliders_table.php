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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('first_headingBlack')->nullable();
            $table->string('first_headingBlue')->nullable();
            $table->string('second_headingBlack')->nullable();
            $table->string('second_headingBlue')->nullable();
            $table->string('mini_para');
            $table->string('image_link');
            $table->string('more_infoLink')->nullable();
            $table->string('more_infoLink2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};

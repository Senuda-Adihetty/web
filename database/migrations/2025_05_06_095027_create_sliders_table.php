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
            $table->string('first_headingBlack');
            $table->string('first_headingBlue');
            $table->string('second_headingBlack');
            $table->string('second_headingBlue');
            $table->string('mini_para');
            $table->string('image_link');
            $table->string('more_infoLink')->nullable;
            $table->string('more_infoLink2')->nullable;
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

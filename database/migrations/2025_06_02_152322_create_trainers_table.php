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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('Trainer_ID')->unique();
            $table->string('fName');
            $table->string('lName')->nullable();
            $table->string('phone_No');
            $table->string('gender');
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->string('basic_Sal')->nullable();
            $table->string('photo')->nullable();
            $table->text('qulification')->nullable();
            $table->string('email');
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};

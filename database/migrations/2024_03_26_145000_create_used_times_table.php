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
        Schema::create('used_times', function (Blueprint $table) {
            $table->id();
            $table->date('UsedDate');
            $table->time('UsedTime');
            $table->time('EndTime');
            $table->time('duration');
            $table->unsignedBigInteger('user_ID');
            $table->foreign('user_ID')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used_times');
    }
};

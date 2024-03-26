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
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->date('add_date');
            $table->string('manufacturer');
            $table->string('ink_type');
            $table->boolean('statuss');
            $table->unsignedBigInteger('UsedTimes_ID');
            $table->foreign('UsedTimes_ID')->references('id')->on('used_times');
            $table->unsignedBigInteger('paper_ID');
            $table->foreign('paper_ID')->references('id')->on('papers');
            $table->unsignedBigInteger('notes_ID');
            $table->foreign('notes_ID')->references('id')->on('notes');
            $table->unsignedBigInteger('ink_ID');
            $table->foreign('ink_ID')->references('id')->on('inks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printers');
    }
};

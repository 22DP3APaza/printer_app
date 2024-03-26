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
            $table->string("name");
            $table->string("model");
            $table->date("add_date");
            $table->string("manufacturer");
            $table->string("ink_type");
            $table->bool("statuss");
            $table->integer("ink_ID");
            $table->foreign("ink_ID")->references('id')->on('Inks');
            $table->integer('UsedTime_ID');
            $table->foreign('UsedTime_ID')->references('id')->on('UsedTimes');
            $table->integer("Paper_ID");
            $table->foreign('Paper_ID')->references('id')->on('Papers');
            $table->integer('Notes_ID');
            $table->foreign("Notes_ID")->references('id')->on('Notes');
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

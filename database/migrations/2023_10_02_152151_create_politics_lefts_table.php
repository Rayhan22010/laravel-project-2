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
        Schema::create('politics_lefts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('date_time');
            $table->string('heading');
            $table->string('description');
            $table->string('btn_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('politics_lefts');
    }
};

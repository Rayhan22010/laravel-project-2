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
        Schema::create('home_politics', function (Blueprint $table) {
            $table->id();
            $table->string('p_image');
            $table->string('heading');
            $table->string('r_image');
            $table->string('r_name');
            $table->string('date_time');
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
        Schema::dropIfExists('home_politics');
    }
};

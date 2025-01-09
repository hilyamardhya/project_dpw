<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_films_table.php
public function up()
{
    Schema::create('films', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('cover');
        $table->year('tahun_rilis');
        $table->string('sutradara');
        $table->string('studio');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};

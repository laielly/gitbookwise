<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('avaliacoes', function (Blueprint $table) {
        $table->id();
        $table->integer('avaliacao');
        $table->string('comentario', 2000);
        $table->dateTime('data');
        $table->unsignedBigInteger('leitura_id');
        $table->foreign('leitura_id')->references('id')->on('leituras')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacoes');
    }
};

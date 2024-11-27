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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->string('autor', 200);
            $table->string('editora', 200);
            $table->string('genero', 200);
            $table->integer('anoPublicacao');
            $table->string('descricao', 45)->nullable();
            
            // Define responsavel_id como um campo opcional
            $table->unsignedBigInteger('responsavel_id')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};

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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',125);
            $table->string('apellidos',125);
            $table->string('correo',125);
            $table->string('contraseña',125);
            $table->string('edad',125);
            $table->string('numero_de_documento',125);
            $table->unsignedBigInteger('tipo_de_documento_id')->unsigned();
            $table->unsignedBigInteger('genero_id')->unsigned();
            $table->unsignedBigInteger('rol_id')->unsigned();
            $table->timestamps();
            //uniones
            $table->foreign('tipo_de_documento_id')->references('id')->on('tipos_de_documentos');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
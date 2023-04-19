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
        Schema::create('combos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedBigInteger('producto_id')->unsigned();
            $table->unsignedBigInteger('sistema_monitoreo_id')->unsigned();
            $table->timestamps();

            //uniones
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('sistema_monitoreo_id')->references('id')->on('sistemas_monitoreo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combos');
    }
};

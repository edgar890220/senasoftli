<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre",20);
            $table->string("agua",20);
            $table->string("viento",20);
            $table->string("fuego",20);
            $table->string("aire",20);
            $table->string("imagen",20);
            $table->foreignId('id_partida')
            ->nullable()
        ->constrained('partidas')
        ->cascadeOnUpdate()
        ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartas');
    }
};

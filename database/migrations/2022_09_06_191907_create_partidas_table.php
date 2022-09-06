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
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_administrador')
            ->nullable()
                ->constrained('administradors')
                ->cascadeOnUpdate()
                ->nullOnDelete();
                $table->foreignId('id_jugador')
                ->nullable()
                    ->constrained('jugadors')
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
        Schema::dropIfExists('partidas');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToClientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('bairro')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('genero')->nullable();
            $table->integer('pets')->default(0);  // Quantidade de animais de estimação
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn(['bairro', 'estado_civil', 'genero', 'pets']);
        });
    }
}

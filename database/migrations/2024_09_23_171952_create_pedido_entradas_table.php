<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoEntradasTable extends Migration
{
    public function up()
    {
        Schema::create('pedido_entradas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('products')->onDelete('cascade');
            $table->string('fornecedor');
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_entradas');
    }
}

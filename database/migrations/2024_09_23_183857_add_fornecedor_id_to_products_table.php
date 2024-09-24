<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFornecedorIdToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('fornecedor_id')->nullable(); // Adiciona a coluna fornecedor_id
            
            // Adiciona a chave estrangeira
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['fornecedor_id']); // Remove a chave estrangeira
            $table->dropColumn('fornecedor_id'); // Remove a coluna
        });
    }
}

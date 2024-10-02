<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFornecedorToMarcaInProductsAndPedidoEntradas extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('fornecedor')->change(); 
            $table->renameColumn('fornecedor', 'marca');  // Renomeia a coluna fornecedor para marca na tabela products
        });

        Schema::table('pedido_entradas', function (Blueprint $table) {
            $table->string('fornecedor')->change(); 
            $table->renameColumn('fornecedor', 'marca');  // Renomeia a coluna fornecedor para marca na tabela pedido_entradas
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('marca', 'fornecedor');
        });

        Schema::table('pedido_entradas', function (Blueprint $table) {
            $table->renameColumn('marca', 'fornecedor');
        });
    }
}

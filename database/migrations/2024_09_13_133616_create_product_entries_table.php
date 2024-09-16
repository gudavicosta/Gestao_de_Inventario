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
        Schema::create('product_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idProduto')->constrained('products')->onDelete('cascade');
            $table->date('data');
            $table->integer('quantidade');
            $table->string('fornecedor');
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
        Schema::dropIfExists('product_entries');
    }
};

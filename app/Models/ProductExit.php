<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductExit extends Model
{
    protected $fillable = ['idProduto', 'data', 'quantidade', 'idCliente'];

    public function registrarSaida() {
        // A ser implementado
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoEntrada extends Model
{
    protected $fillable = ['produto_id', 'marca', 'quantidade'];

    public function produto()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['cliente_id', 'total_vendido'];

    // Uma venda pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Uma venda pode ter vários produtos
    public function products()
    {
        return $this->belongsToMany(Product::class, 'venda_produtos')
                    ->withPivot('quantidade', 'preco_unitario')
                    ->withTimestamps();
    }
}

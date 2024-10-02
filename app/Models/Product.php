<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'categoria', 'preco','marca','quantidadeEmEstoque','imagem'];

   
    public function vendas()
    {
        return $this->belongsToMany(Venda::class, 'venda_produtos')
                    ->withPivot('quantidade', 'preco_unitario')
                    ->withTimestamps();
    }

    public function pedidoEntradas()
    {
        return $this->hasMany(PedidoEntrada::class);
    }


}

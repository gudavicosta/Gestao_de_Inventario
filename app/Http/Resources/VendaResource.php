<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VendaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cliente' => $this->cliente->nome, 
            'total_vendido' => $this->total_vendido,
            'produtos' => $this->products->map(function($produto) {
                return [
                    'nome' => $produto->nome,
                    'categoria' => $produto->categoria,
                    'quantidade' => $produto->pivot->quantidade,  
                    'preco_unitario' => $produto->pivot->preco_unitario,
                ];
            }),
            'data_venda' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}

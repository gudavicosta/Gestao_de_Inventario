<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidoEntradaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'marca' => $this->fornecedor,
            'quantidade' => $this->quantidade,
            'produto' => [
                'nome' => $this->produto->nome,
                'categoria' => $this->produto->categoria,
                'preco' => $this->produto->preco,
            ],
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}

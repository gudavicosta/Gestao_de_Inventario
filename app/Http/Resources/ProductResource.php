<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'categoria' => $this->categoria,
            'preco' => $this->preco,
            'quantidadeEmEstoque' => $this->quantidadeEmEstoque,
            'fornecedor_id' => $this->fornecedor_id,
            'fornecedor' => $this->fornecedor ? $this->fornecedor->nome : 'Fornecedor não disponível',
        ];
    }
}

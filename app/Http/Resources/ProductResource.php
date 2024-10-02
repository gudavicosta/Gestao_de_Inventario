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
        'imagem' => $this->imagem ? asset('storage/' . $this->imagem) : null,  
        'marca' => $this->marca,
    ];
}
}



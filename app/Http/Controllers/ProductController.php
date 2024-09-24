<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    // Listar todos os produtos
    public function index()
    {
        return ProductResource::collection(Product::with('fornecedor')->get());
    }

    // Criar um novo produto
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return new ProductResource($product); 
    }

    // Mostrar um produto específico
    public function show($id)
    {
        $product = Product::with('fornecedor')->findOrFail($id);
        return new ProductResource($product);
    }

    // Atualizar um produto existente
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return new ProductResource($product);
    }

    // Deletar um produto
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }

    // Atualizar o preço de um produto
    public function atualizarPreco(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->preco = $request->input('novoPreco');
        $product->save();
        return new ProductResource($product); 
    }
}

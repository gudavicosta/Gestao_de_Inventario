<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listar todos os produtos
    public function index()
    {
        return Product::all();
    }

    // Criar um novo produto
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // Mostrar um produto específico
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    // Atualizar um produto existente
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
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
        return response()->json($product, 200);
    }
}

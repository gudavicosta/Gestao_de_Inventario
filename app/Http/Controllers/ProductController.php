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
        return ProductResource::collection(Product::all());

    }

    // Criar um novo produto
    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'categoria' => 'required|string|max:255',
        'preco' => 'required|numeric',
        'quantidadeEmEstoque' => 'required|integer',
        'marca' => 'required|string|max:255',
        'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validação da imagem
    ]);

    $data = $request->all();

    // Salvar a imagem, se existir
    if ($request->hasFile('imagem')) {
        $imagePath = $request->file('imagem')->store('imagens_produtos', 'public');
        $data['imagem'] = $imagePath;  // Salvar o caminho da imagem no banco
    }

    $product = Product::create($data);

    return new ProductResource($product);
}



    // Mostrar um produto específico
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Atualizar um produto existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'string|max:255',
            'categoria' => 'string|max:255',
            'preco' => 'numeric',
            'quantidadeEmEstoque' => 'integer',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();

        // Salvar a imagem, se existir
        if ($request->hasFile('imagem')) {
            // Apagar a imagem antiga, se existir
            if ($product->imagem) {
                Storage::disk('public')->delete($product->imagem);
            }

            $imagePath = $request->file('imagem')->store('imagens_produtos', 'public');
            $data['imagem'] = $imagePath;
        }

        $product->update($data);

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
        return new ProductResource($product); 
    }
}

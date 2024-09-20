<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    // Listar todos os fornecedores
    public function index()
    {
        return Fornecedor::all();
    }

    // Registrar um novo fornecedor
    public function store(Request $request)
    {
        $fornecedor = Fornecedor::create($request->all());
        return response()->json($fornecedor, 201);
    }

    // Mostrar um fornecedor específico
    public function show($id)
    {
        return Fornecedor::findOrFail($id);
    }

    // Atualizar um fornecedor existente
    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return response()->json($fornecedor, 200);
    }

    // Deletar um fornecedor
    public function destroy($id)
    {
        Fornecedor::destroy($id);
        return response()->json(null, 204);
    }

    // Atualizar informações de um fornecedor
    public function atualizarInformacoes(Request $request, $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return response()->json($fornecedor, 200);
    }
}

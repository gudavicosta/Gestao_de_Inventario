<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Listar todos os clientes
    public function index()
    {
        return Cliente::all();
    }

    // Registrar um novo cliente
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    // Mostrar um cliente específico
    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    // Atualizar um cliente existente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return response()->json($cliente, 200);
    }

    // Deletar um cliente
    public function destroy($id)
    {
        Cliente::destroy($id);
        return response()->json(null, 204);
    }

    
}

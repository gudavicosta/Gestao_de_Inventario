<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Listar todos os animais
    public function index()
    {
        return Animal::all();
    }

    // Registrar um novo animal
    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        return response()->json($animal, 201);
    }

    // Mostrar um animal específico
    public function show($id)
    {
        return Animal::findOrFail($id);
    }

    // Atualizar um animal existente
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return response()->json($animal, 200);
    }

    // Deletar um animal
    public function destroy($id)
    {
        Animal::destroy($id);
        return response()->json(null, 204);
    }

    // Consultar informações de um animal
    public function consultarInformacoes($id)
    {
        $animal = Animal::findOrFail($id);
        return response()->json($animal, 200);
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Listar todos os usuários
    public function index()
    {
        return User::all();
    }

    // Criar um novo usuário
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return $user;
    }

    // Exibir um usuário pelo ID
    public function show($id)
    {
        return User::find($id);
    }

    // Atualizar um usuário
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return $user;
    }

    // Deletar um usuário
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome', 'contato', 'endereco'];

    protected $table = 'fornecedores';

    
}

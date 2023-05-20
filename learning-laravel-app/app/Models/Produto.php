<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Especificar com quais campos da tabela vou trabalhar.
    protected $fillable = ['nome', 'valor', 'estoque'];
}

// No Laravel há uma facilidade enorme de interagir com o BD. Este arquivo, espelha a tabela produtos. A regra do Laravel procura no plural, no BD, a model no singular. É uma regra (facilidade do Laravel).
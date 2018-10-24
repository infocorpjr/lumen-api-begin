<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = ['nome', 'trabalho', 'email', 'telefone', 'problema', 'beneficios', 'publicoAlvo', 'site',
        'aplicativoMovel', 'sistemaWeb', 'sistemaDesktop', 'curso'];

}

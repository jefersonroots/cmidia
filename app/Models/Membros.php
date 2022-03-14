<?php

namespace App\Models;

use App\Http\Controllers\ChatController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\MembroToken;

class Membros extends Model
{
    use HasFactory;

    protected $fillable = [
        'CPF',
        'nome',
        'dt_nascimento',
        'id_users',

    ];

    public function endereco()
    {

        return $this->belongsToMany('App\Models\Endereco','membro_enderecos','membro_id','endereco_id');
    }

    public function contato()
    {
        return $this->belongsToMany('App\Models\Contato','membro_contatos','membro_id','contato_id');
    }

    public function membroTokens()
    { 
        return $this->hasMany(MembroToken::class);
    }

};

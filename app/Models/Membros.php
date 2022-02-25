<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

};

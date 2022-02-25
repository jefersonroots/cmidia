<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoEndereco',
        'logradouro',
        'complemento',
        'cep',
        'numero',
        'bairro',
        'cidade',
    ];


    public function membros()
    {
        return $this->belongsToMany('App\Models\Membros','membro_enderecos','membro_id','endereco_id');
    }



}

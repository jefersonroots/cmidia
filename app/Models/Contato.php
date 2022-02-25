<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_telefone',
        'tipo_telefone',
    ];


    public function membros()
    {

        return $this->belongsToMany('App\Models\Membros','membro_contatos','contato_id','membro_id');
    }
}

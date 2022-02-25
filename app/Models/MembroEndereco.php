<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroEndereco extends Model
{
    use HasFactory;

    protected $fillable =[
        'membro_id',
        'endereco_id',
    ];
}

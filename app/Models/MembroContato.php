<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroContato extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'membro_id',
        'contato_id',
    ];
}

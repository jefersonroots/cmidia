<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroToken extends Model
{
    use HasFactory;
  
    protected $guarded=[]; 
    protected $data=[ 
        'expires_at',
    'consumed_at', 
]; 
   
    public function membro() 
    { 
        return $this->belongsTo(Membros::class); 
    } 
    
  
}

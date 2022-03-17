<?php

namespace App\Models;
use Illuminate\Support\Facades\Mail;
use App\Mail\MagicLoginLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroToken extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $data = [
        'expires_at',
        'consumed_at',
    ];

    public function membro()
    {
        return $this->belongsTo(Membros::class);
    }
    public function isValid()
    {
       return !$this->isExpired() && !$this->isConsumed();
    }

    public function isExpired()
    {
      //  return $this->expires_at->isBefore(now());
    }

    public function isConsumed()
    {
       // return $this->consumed_at !== null;
    }

    public function consume()
    {
       // $this->consumed_at = now();
    //    $this->save();
    }

    public function sendLoginLink()
    {
        $plaintext = Str::random(32);
        $token = $this->create([
          'token' => hash('sha256', $plaintext),
          'expires_at' => now()->addMinutes(15),
          'id_users' => '1'    //    'membro_id' =>  Membros::latest('id')->first()->id,
        ]);
        Mail::to($this->email)->queue(new MagicLoginLink($plaintext, $token->expires_at));
    }
    

}

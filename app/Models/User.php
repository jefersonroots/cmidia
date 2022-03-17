<?php

namespace App\Models;
use Illuminate\Support\Facades\Mail;
use App\Mail\MagicLoginLink;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Membros;
use Illuminate\Support\Str;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function membros()
    {
        return $this->hasMany(Membros::class,'id_membro');
    }


    public function sendLoginLink()
{
    $plaintext = Str::random(32);
    $token = $this->create([
      'token' => hash('sha256', $plaintext),
      'expires_at' => now()->addMinutes(15),
        //    'membro_id' =>  Membros::latest('id')->first()->id,
    ]);
    Mail::to($this->email)->queue(new MagicLoginLink($plaintext, $token->expires_at));
}

}

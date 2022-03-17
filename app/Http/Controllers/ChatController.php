<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Queueable;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth;

use LaravelLegends\PtBrValidator\Rules\FormatoCpf;
use App\Models\Membros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Hash;

use App\Models\MembroToken;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        Membros::where('email', $data['email'])->first()->sendLoginLink('MembroToken');
        session()->flash('success', true);
        return redirect()->back();
    }

    public function verifyLogin(Request $request, $token)
    {
        $token = \App\Models\MembroToken::whereToken(hash('sha256', $token))->firstOrFail();
        abort_unless($request->hasValidSignature() && $token->isValid(), 401);
        $token->consume();
        Auth::login($token->user);
        return redirect('/chat2');
    }
    public function ind()
    {

        return view('gerar_token');
    }

    public function principal($id)
    {

        // $token = Membros::findOrFail($token);

        $id = User::findOrFail($id);
        // if (Hash::check('plain-text', $token)) {
        //     // The passwords match...
        // }
        return view('chat', ['id' => $id]);
        // return (" olá ao chat");
    }
}

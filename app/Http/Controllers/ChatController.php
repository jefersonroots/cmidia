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
        // Auth::login($token->user);
        return redirect('/chat2');
    }
  

    public function principal()
    {

        // $token = Membros::findOrFail($token);

        // $id = User::findOrFail($id);
        // if (Hash::check('plain-text', $token)) {
        //     // The passwords match...
        // }
        return view('chat2');
        // return (" olá ao chat");
    }
    public function ind(Request $request)
    {
        
            $token = $request
            ->session()
            ->get('token');
            return view('gerar_token', compact('token'));
      
    }
    public function verificaToken(Request $request){
        $token = $request->token; // pego meu token 
        $verify = MembroToken::where('token', $token)->get(); // verifico se tem no banco 
        $qtd = $verify->count(); // faço a contagem de linha de retorno
        if($qtd >= 0 & $qtd != null){
            session()->put('token', $token);
    return redirect()->route('tokens')->with('status', 'Oi, bom ver que você esta aqui.');
        }
        else 
        {
            return redirect()->back()->with('error', 'Ahh você não deveria estar aqui.');
        }


}


}

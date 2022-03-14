<?php

namespace App\Http\Controllers;
use Illuminate\Bus\Queueable;
use App\Models\User;
use App\Models\Membros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\Models\MembroToken;
class ChatController extends Controller
{


    public function principal($id){
        
        // $token = Membros::findOrFail($token);
    
        $id = User::findOrFail($id);
        // if (Hash::check('plain-text', $token)) {
        //     // The passwords match...
        // }
        return view('chat', ['id' => $id]);
        // return (" olá ao chat");
    }

}

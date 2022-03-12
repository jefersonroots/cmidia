<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function principal($id){

        $id = User::findOrFail($id);
        return view('chat', ['id' => $id]);
        // return (" olá ao chat");
    }

}

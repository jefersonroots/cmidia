<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Membros;
use App\Models\MembroContato;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        // $users_membro = User::Find(2);
        $id_users = auth()->user()->id;
      
        // $membros = Membros::all();

      $membros2 = Membros::where('id_users','=',$id_users)->get();
    //    $membros = Membros::where('id','=',1);
        array($membros2);
        return view('home', compact('membros2'));
    }
}

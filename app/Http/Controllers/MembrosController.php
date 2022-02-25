<?php

namespace App\Http\Controllers;

use App\Models\Membros;
use App\Models\Contato;
use App\Models\Endereco;


use Illuminate\Http\Request;

class MembrosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $membros = Membros::all();
        // return view('home', compact('membros') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', ['action'=>route('membros.store'), 'method'=>'post']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('home'));
    if (! $request->has('cancel') ){
        $dados = $request->all();
        Membros::create($dados);
        Contato::create($dados);
        Endereco::create($dados);

        $request->session()->flash('message', 'Membros cadastrado com sucesso');
    }
    else
    {
        $request->session()->flash('message', 'Operação cancelada pelo usuário');
    }
    return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membros  $membros
     * @return \Illuminate\Http\Response
     */
    public function show(Membros $membros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membros  $membros
     * @return \Illuminate\Http\Response
     */
    public function edit(Membros $membros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membros  $membros
     * @return \Illuminate\Http\Response
     */
    public function update(Membros $membro ,Request $request )
    {
        if (!$request->has('cancel') ){
            $membro-> CPF = $request->CPF;
            $membro-> nome = $request->nome;
            $membro-> dt_nascimento = $request->dt_nascimento;
            $membro->update();
            \Session::flash('message', 'Membro atualizado com sucesso !');

        }
        else
        {
            $request->session()->flash('message', 'Operação cancelada pelo usuário');
        }
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membros  $membros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membros $membros, Request $request)
    {

        if (!$request->has('cancel') ){
            $membros->delete();
            \Session::flash('message', 'Membro excluído com sucesso !');
        }
        else
        {
            $request->session()->flash('message', 'Operação cancelada pelo usuário');
        }
        return redirect()->route('home');
    }
}

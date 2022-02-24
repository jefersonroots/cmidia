@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="blocoPerfil" class="card-header">{{ __('Listagem de Membros') }}</div>

                <div id="cardPerfil"  class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-9">
                            <h3></h3>
                        </div>
                        
                        <div class="col-md-3">
                            <a href="{{route('membros.create')}}" class="btn btn-primary">Incluir Membros &nbsp; </a>
                          
                        </div>
                        <br/>
                    </div>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Data de Nascimento</th>
                                    <th>Usuário Relacionado</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($membros as $membro)
                                <tr>
                                    <td>{{ $membro->id }}</td>
                                    <td>{{ $membro->nome }}</td>
                                    <td>{{ $membro->CPF }}</td>
                                    <td>{{ $membro->dt_nascimento }}</td>
                                    <td>{{ $membro->id_users}}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li>
                                            <a href="{{route('membros.editar',['membros' => $membro])}}">Editar</a>
                                            |
                                            <a href="{{route('membros.delete', ['membros' => $membro])}}">Deletar</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>

@endsection

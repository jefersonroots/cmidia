@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id="blocoPerfil" class="card-header">{{ __('Listagem de Membros') }}</div>

                    <div id="cardPerfil" class="card-body">
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
                                <a href="{{ route('membros.create') }}" class="btn btn-primary">Incluir Membros </a>

                            </div>
                            <br />
                        </div>
                        <br />
                        {{-- @foreach ($membros2 as $users)
                       
                        <p class="card-text">
                            USER: {{ $users->id }}
                         </p>
                        @endforeach --}}

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach ($membros2 as $membro)
                                            <div class="col-md-4">
                                                <br>
                                                <div align="center" class="card">
                                                    <img class="card-img-top" alt="Bootstrap Thumbnail First"
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5iFUjJIW-HB9LqY9QR4spqkTCczkmwCRYXA&usqp=CAU" />
                                                    <div class="card-block">
                                                        <br />
                                                        <h5 class="card-title">
                                                            {{ $membro->nome }}
                                                        </h5>
                                                        <p class="card-text">
                                                            CPF: {{ $membro->CPF }}
                                                        </p>
                                                        <p class="card-text">
                                                            Anivers??rio: {{ $membro->dt_nascimento }}
                                                        </p>
                                                        {{-- <p class="card-text">
                                                                    User: {{ $membro->id_users }}
                                                                     </p> --}}
                                                    </div>

                                                   
                                                   <br />
                                                    <div align="center" class=" col-md-12">
                                                  
                                                            <a
                                                                href="{{ route('membros.editar', ['membros' => $membro]) }}">
                                                                <svg style="color:rgba(63, 241, 152, 0.79);" xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="20" fill="currentColor"
                                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />

                                                                </svg> </a>
                                                   &nbsp;&nbsp;
                                                            <a
                                                                href="{{ route('membros.delete', ['membros' => $membro]) }}">
                                                                <svg style="color:rgba(63, 241, 152, 0.79);" xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="20" fill="currentColor" class="bi bi-trash3"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />

                                                                </svg> </a>

                                                      
                                                    </div>
                                                    <br />
                                                    <div id="linha-horizontal"></div>
                                                    
                                                    <h4><a fill="currentColor" style="color:rgba(63, 241, 152, 0.79);text-decoration:none;" 
                                                        href="{{ route('tokens') }}" class="card-text">
                                                        Gerar Token                                                    
                                                    </a></h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />

                    </div>

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card  col-md-8">
                <div id="blocoPerfil" align="center" class="card-header">{{ __('Perfil Do Usuario') }}</div>

                <div id="cardPerfil" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div id="alinhaLinha">
                        <label for="email"><h5>Email:</h5></label> <br/>
                        <input readonly value="{{ $id->email }}"/> <br/> <br/>

                        <label for="email"><h5>Nome:</h5></label> <br/>
                        <input readonly value="{{ $id->name }}"/>
                        </div>

                        <div id="alinhaLinha2">
                            <label for="email"><h5></h5></label> <br/>
                            <img id="imgLogo" src="{{ asset('logo.png') }}" />

                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

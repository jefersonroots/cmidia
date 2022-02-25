@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div id="blocoPerfil" class="card-header">{{ __('Editar Membro') }}</div>

              <div id="cardPerfil"  class="card-body">
    <div align="center" class="row">
        <h3></h3>
    <form action={{route('membros.update', ['membro' => $membros])}} method="post">
        @csrf
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$membros->id}}>
        <div>
            <label for="CPF">CPF: </label>
            <input class="form-control" type="text" id="CPF" name="CPF" value="{{$membros->CPF}}">
        </div>
        <div>
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome" value="{{$membros->nome}}">
        </div>
        <div>
            <label for="dt_nascimento">Data Nascimento: </label>
            <input  class="form-control" type="text" id="dt_nascimento" name="dt_nascimento" value="{{$membros->dt_nascimento}}">
        </div>

            <div class="form-group">
                <br/>
                <input type="submit"  class="btn btn-success" name="save_eqp" value="Atualizar">
                <input type="submit"  class="btn btn-danger" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
          </div>
      </div>
    </div>
</div>

@endsection

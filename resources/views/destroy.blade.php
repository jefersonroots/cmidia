@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div id="blocoPerfil" class="card-header">{{ __('Deletar Membro') }}</div>

            <div id="cardPerfil"  class="card-body">
  <div align="center" class="row">
   
    <form action="{{route('membros.delete',$membros->id) }}" method="POST">
      @csrf
       @method('DELETE')
      
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <label for="modelo">CPF:</label>
    <input class="form-control"type="text" id="modelo" name="modelo" value="{{$membros->CPF}}" disabled>
    </div>
    <div>
      <label for="tipo">Nome:</label>
      <input class="form-control "type="text" id="tipo" name="tipo" value="{{$membros->nome}}" disabled>
      </div>
    <div>
    <label for="fabricante">ID Usuário</label>
    <input class="form-control"type="text" id="fabricante" name="fabricante" value="{{$membros->id_users}}" disabled>
    </div>
    <br>
    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do equipamento?</div>
    <div class="form-group">

      <input type="submit" class="btn btn-danger"  name="delete_eqp" value="Deletar"/>
      <input type="submit" class="btn btn-warning"  name="cancel" value="Cancelar"/>
      </div>
  </div>
  </form>
</div>
</div>
</div>
</div>
</div>  
@endsection
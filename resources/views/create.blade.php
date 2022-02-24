@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="blocoPerfil" class="card-header">{{ __('Novo Membro') }}</div>

                <div id="cardPerfil"  class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <h3></h3>
                        @include('_form')
                        
                        <div align="center" class="form-group">
                            <br/>
                            <input  class="btn btn-success" type="submit" name="save_eqp" value="Salvar Membro">
                            <input class="btn btn-danger" type="submit" name="cancel" value="Cancelar">
                        </div>
                    </div>
                </div>

                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>  
    </form>
</div>
@endsection
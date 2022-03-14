@extends('layouts.app')

@section('content')
    <div id='blocoChat' class="container  col-md-9">
        <div class="row justify-content-center">
            <div class="">
                <div class="BodyChat">
                    <div id="blocoPerfil" class="card-header">{{ __('Chat') }}</div>                
                    <div id="cardChat" class="card-body">
                    <div  style="width:50%;height:50%;background-color:##6610f2" class="container  col-md-8" id="corpoChat">

                    </div>
              <form action={{ route('chat', ['id' => $id]) }} method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="redirect_to" name="redirect_to" value={{ URL::previous() }}>
                                <input type="hidden" id="id" name="id" value={{ $id->id }}>
                                <div>
                                    <label for="CPF">CPF: </label>
                                    <input class="form-control" type="text" id="CPF" name="CPF"
                                        value="">
                                </div>
                                    <div align="center" class="form-group">
                                <br />
                                <input class="btn btn-success" type="submit" name="save_eqp" value="Verificar Hash">

                            </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

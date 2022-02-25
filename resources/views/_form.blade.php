
<form action={{route('membros.store')}} method="post">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div  class="row">
    <div align="center" class="col-sm-6">
    <div>
        <label for="CPF">CPF</label>
        <input class="form-control"  type="number" id="CPF" name="CPF">
    </div>
    <div>
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="dt_nascimento">Data de Nascimento</label>
        <input class="form-control" type="date" id="dt_nascimento" name="dt_nascimento">
    </div>
    <div>
        <label for="id_users">Usuário</label>
        <input class="form-control" disabled type="text"  value="{{ Auth::user()->name }}">
        <input class="form-control" hidden type="text" id="id_users" value="{{ Auth::user()->id }}" name="id_users">
    </div>
    </div>
    <div align="center" class=" col-sm-6">

        <div>
            <label for="tipoEndereco">Tipo de Endereço:</label>
            <input class="form-control"  type="text" id="tipoEndereco" name="tipoEndereco">
        </div>
        <div>
            <label for="logradouro">Logradouro</label>
            <input class="form-control" type="text" id="logradouro" name="logradouro">
        </div>
        <div>
            <label for="complemento">Complemento</label>
            <input class="form-control" type="text" id="complemento" name="complemento">
        </div>
        <div>
            <label for="cep">CEP</label>
            <input class="form-control" type="number" id="cep" name="cep">
        </div>
    </div>
    <div align="center" class=" col-sm-6">
        <div>
            <label for="tipo_telefone">Tipo de Telefone</label>
            <select class="form-control" id="tipo_telefone"  name="tipo_telefone">
                <option value="celular">Celular</option>
                <option value="fixo">Residencial</option>
                <option value="trabalho">Trabalho</option>
            </select>
        </div>
        <div>
            <label for="numero_telefone">Numero de Contato</label>
            <input class="form-control" type="number" id="numero_telefone" name="numero_telefone">
        </div>
        <div>

        </div>

        </div>

    <div align="center" class=" col-sm-6">
        <div>
            <label for="numero">Número</label>
            <input class="form-control" type="number" id="numero" name="numero">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input class="form-control" type="number" id="bairro" name="bairro">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input class="form-control" type="number" id="cidade" name="cidade">
        </div>
    </div>


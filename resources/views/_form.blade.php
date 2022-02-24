
<form action={{route('membros.store')}} method="post">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
        <label for="CPF">CPF</label>
        <input class="form-control"  type="text" id="CPF" name="CPF">
    </div>
    <div>
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="dt_nascimento">Data de Nascimento</label>
        <input class="form-control" type="text" id="dt_nascimento" name="dt_nascimento">
    </div>
    <div>
        <label for="id_users">Id do usuario</label>
        <input class="form-control" type="text" id="id_users" name="id_users">
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action={{ route('chat2.verificar')}} method="POST">
        @csrf
        @method('get')
        {{-- <input class="form-control" hidden type="text" id="id" value="{{ $id => id }}" name="id"> --}}
    <label for="token">Token</label>
    <input type="text"  name="token" id="token"/>
    <button type="submit">Verificar</button>
</form>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif

</body>
</html>
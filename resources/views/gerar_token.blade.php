@extends('layouts.app', ['title' => 'New Token'])
@section('content')
  <div class="h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-md p-8 space-y-4">
      {{-- @if(!session()->has('success')) --}}
      @if(session()->has('token'))
    to logado
    {{ @$token }}
        <h1 class="text-xl font-semibold">Gerar Token</h1>
        <form action="{{ route('chatLogin') }}" method="post" class="space-y-4">
          @csrf
          <div class="space-y-1">
            <label for="email" class="block">Email</label>
            <input type="email" name="email" id="email" class="block w-full border-gray-400 rounded-md px-4 py-2" />
            @error('email')
              <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
          <button class="rounded-md px-4 py-2 bg-indigo-600 text-white">Login</button>
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
      @else
        <p>Ué, cade o token?</p>
      @endif
    </div>
  </div>
@endsection
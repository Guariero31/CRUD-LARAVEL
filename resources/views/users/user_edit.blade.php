@extends('layout.template')
@section('content')
    <h1 class="text-center text-3xl font-bold bg-amber-600 text-white">Edit</h1>

    <form action="" method="POST">
        @csrf <!-- Adiciona o token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->
        @method('PUT') <!-- Especifica o método HTTP PUT -->

        <input type="text" name="name" value="{{$user->name}}">

        <button type="submit">Submit</button>
    </form>
@endsection

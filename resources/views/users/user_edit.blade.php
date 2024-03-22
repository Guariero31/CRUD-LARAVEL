@extends('layout.template')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            <script>alert("{{ session('success') }}")</script>
        </div>
    @endif

    <!-- Se houver uma mensagem de erro, exiba um alerta -->
    @if(session()->has('error'))
        <div class="alert alert-danger">
            <script>alert("{{ session('error') }}")</script>
        </div>
    @endif
    <h1 class="text-center text-3xl font-bold bg-amber-600 text-white">Editar Usuario</h1>
    <div class="flex justify-center flex-col">
        <form action="{{ route('users.update', ['user'=> $user->id]) }}" method="POST">
            @csrf <!-- Adiciona o token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->
            @method('PUT') <!-- Especifica o método HTTP PUT -->

            <div class="flex justify-center p-10">
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        Last Name
                    </label>
                    <input
                        name="name"
                        class="text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                        id="grid-last-name" type="text" value="{{$user->name}}">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        Email
                    </label>
                    <input
                        name="email"
                        class="text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                        id="grid-last-name" type="text" value="{{$user->email}}">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        Senha
                    </label>
                    <input
                        name="email"
                        class="text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                        id="grid-last-name" type="password" value="{{$user->password}}">
                </div>
            </div>
            <div class="flex justify-center gap-3">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 px-4 py-2 text-white font-semibold rounded">Enviar
                </button>
                <button type="button" onclick="window.history.back()"
                        class="bg-red-600 hover:bg-red-700 px-4 py-2 text-white font-semibold rounded">Cancelar
                </button>
            </div>
        </form>
    </div>
@endsection

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
    <h1 class="text-center text-3xl font-bold bg-amber-600 text-white py-3">Tela de Usuários</h1>
    <div class="container mx-auto border-2 p-5">
        <div class="flex justify-end gap-5 py-5">
            <div>
                <a href="{{ route('home') }}"
                   class="bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white font-semibold rounded">Voltar</a>
            </div>
            <div>
                <a href="{{ route('users.create') }}"
                   class="bg-green-600 hover:bg-green-700 px-4 py-2 text-white font-semibold rounded">Novo Usuário</a>
            </div>
        </div>
        <ul class="divide-y divide-gray-300">
            @foreach($users as $user)
                <li class="py-3 flex justify-between items-center">
                    <p class="text-lg font-semibold">{{ $user->name }}</p>
                    <div class="flex text-lg font-bold gap-2">
                        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="text-blue-600">Visualizar</a>
                        |
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="text-green-600">Editar</a> |
                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-700">Deletar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

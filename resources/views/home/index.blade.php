@extends('layout.template')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="bg-amber-600 p-10 rounded-lg shadow-md">
            <h1 class="text-center text-3xl font-bold text-white mb-8">Tela de Home</h1>
            <a href="{{ route('users.index') }}" class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg text-center">Usuários</a>
        </div>
    </div>
@endsection

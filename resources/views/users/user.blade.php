@extends('layout.template')
@section('content')
    <h1 class="text-center text-3xl font-bold bg-amber-600 text-white">Tela de Usuarios</h1>
    <div class="flex justify-center p-5">
        <ul class="">
            @foreach($users as $user)
                <li class="border-2 px-5 py-2 text-lg font-semibold">
                    {{$user->name}} | <a href="{{route('users.edit',['user' => $user->id])}}" class="text-green-600">Edit</a> | <a href="" class="text-red-700">Deletar</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection

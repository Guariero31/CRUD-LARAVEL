@extends('layout.template')
@section('content')
    <div class="text-center">
        @if(session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Sucesso!</strong>
                <span class="block sm:inline">{{ session()->get('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20"><title>Fechar</title><path
                            d="M14.348 5.652a.5.5 0 0 1 .706.706L10.707 10l4.347 4.348a.5.5 0 0 1-.706.706L10 10.707l-4.348 4.347a.5.5 0 0 1-.706-.706L9.293 10 5.645 5.652a.5.5 0 0 1 .706-.706L10 9.293l4.348-4.347z"/></svg>
                </span>
            </div>
        @endif
    </div>
    <h1 class="text-center text-3xl font-bold bg-amber-600 text-white">Cadastrar Usuario</h1>
    <div class="flex justify-center flex-col">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf <!-- Adiciona o token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->

            <div class="flex justify-center p-10">
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        Nome
                    </label>
                    <input
                        name="name"
                        class="text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                        id="grid-last-name" type="text" placeholder="Nome">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        E-mail
                    </label>
                    <input
                        name="email"
                        class="text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                        id="grid-last-name" type="text" placeholder="E-mail">
                </div>
                <div class="px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                           for="grid-last-name">
                        Senha
                    </label>
                    <input
                        name="password"
                        class="text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                        id="grid-last-name" type="password" placeholder="Senha">

                </div>
            </div>
            <div class="flex justify-center gap-3">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 px-4 py-2 text-white font-semibold rounded">Cadastrar
                </button>
                <button type="button" onclick="window.history.back()"
                        class="bg-red-600 hover:bg-red-700 px-4 py-2 text-white font-semibold rounded">Cancelar
                </button>
            </div>
        </form>
    </div>
@endsection

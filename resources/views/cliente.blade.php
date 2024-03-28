<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clientes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')

</head>
<body class="antialiased h-full">

<x-header></x-header>
<main class="flex items-center justify-center flex-col">
    <div class="col ">
        <a class="btn btn-sm btn-success" href={{ route('cliente.create') }}>Novo cliente</a>
    </div>
    <table class="border-collapse table-auto">
        <thead>
        <tr>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-gray-800 text-left">Nome</th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-gray-800 text-left">
                Documento
            </th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-gray-800 text-left">Telefone
            </th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-gray-800 text-left">Endereço
            </th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-gray-800 text-left">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-gray-500">{{$cliente->nome}}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-gray-500">{{$cliente->documento}}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-gray-500">{{$cliente->telefone}}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-gray-500">{{$cliente->endereço}}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-gray-500">
                    <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
                    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
</body>
</html>

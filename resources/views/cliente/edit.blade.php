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

    <form method="post" action="{{route('cliente.update', $cliente->id)}}" class="w-1/4">
        @csrf
        @method('PUT')
        <label class="block" for="nome">Nome</label>
        <input name="nome" id="nome" class="border-gray-800 rounded border-2 w-full" value="{{ $cliente->nome }}"/>

        <label class="block" for="documento">Documento</label>
        <input name="documento" id="documento" class="border-gray-800 rounded border-2 w-full"
               value="{{ $cliente->documento }}"/>

        <label class="block" for="telefone">Telefone</label>
        <input name="telefone" id="telefone" class="border-gray-800 rounded border-2 w-full"
               value="{{ $cliente->telefone }}"/>

        <label class="block" for="endereco">Endereço</label>
        <input name="endereço" id="endereco" class="border-gray-800 rounded border-2 w-full"
               value="{{ $cliente->endereço }}"/>

        <button type="submit" class="block p-2 mt-2 bg-gray-800 text-white rounded w-full">Salvar</button>
    </form>
</main>
</body>
</html>

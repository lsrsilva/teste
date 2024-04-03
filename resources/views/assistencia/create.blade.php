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

    <form method="POST" action="{{url('assistencia')}}" class="w-1/4">
        @csrf
        <label class="block" for="nome">Descrição</label>
        <input name="descricao" id="descricao" class="border-gray-800 rounded border-2 w-full"/>

        <label for="cliente">Cliente</label>
        <select name="cliente_id" id="cliente" class="border-gray-800 rounded border-2 w-full">
            @foreach($clientes as $cliente )
                <option value="{{$cliente->id}}">
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="block p-2 mt-2 bg-gray-800 text-white rounded w-full">Salvar</button>
    </form>
</main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livewire Way</title>

  <!-- tailwind -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  @livewireStyles
</head>
<body class="min-h-screen flex items-center justify-center">

  {{-- <livewire:cool /> --}}
  {{-- @livewire('search-pokemon') --}}
  @foreach ($allPokemon as $pokemon)
  <livewire:show-pokemon :pokemon="$pokemon" :key="$pokemon->id">
    @endforeach

    @livewireScripts
</body>
</html>

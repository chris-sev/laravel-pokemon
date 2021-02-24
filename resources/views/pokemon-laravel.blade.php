<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Way</title>

  <!-- tailwind -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 flex items-center justify-center">
  <div class="max-w-7xl mx-auto p-20">

    <div class="grid grid-cols-3 gap-8">
      @foreach ($allPokemon as $pokemon)
      <div class="bg-white text-gray-800 py-10 px-20 rounded-lg text-center">
        {{-- image --}}
        <img src="{{ $pokemon->image }}" class="w-32 mx-auto" />

        {{-- cuteness --}}
        <p class="text-4xl my-8">{{ $pokemon->cuteness }} <span class="text-lg text-gray-400">Cuteness</span></p>

        <form method="POST" action="/pokemon/{{ $pokemon->id }}">
          @csrf
          @method('PUT')

          <button class="py-4 px-6 block w-full border-2 border-blue-400 hover:bg-blue-400 text-blue-400 hover:text-white font-bold rounded-lg">Vote</button>
        </form>
      </div>
      @endforeach
    </div>

  </div>
</body>
</html>

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

  <div class="grid grid-cols-4 gap-5">
    @foreach ($allPokemon as $pokemon)
    <div>
      <h2>{{ $pokemon->name }}</h2>
      <img src="{{ $pokemon->image }}" class="w-10" />
      <p>{{ $pokemon->cuteness }} Cuteness</p>

      <form method="POST" action="/pokemon/{{ $pokemon->id }}">
        @csrf
        @method('PUT')

        <button class="p-3 bg-blue-400 rounded text-blue-50">Vote Cuteness</button>

      </form>
    </div>
    @endforeach
  </div>

</body>
</html>

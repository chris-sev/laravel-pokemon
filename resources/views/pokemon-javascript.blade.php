<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript Way</title>

  <!-- tailwind -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-300 flex items-center justify-center">

  <div id="app">
    <div v-for="pokemon in allPokemon" :key="pokemon.id">
      @{{ pokemon.name }}
      <img :src="pokemon.image" class="w-10" />
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script>
    const app = new Vue({
      el: '#app'
      , data: {
        allPokemon: []
      }
      , methods: {
        getPokemon() {
          fetch('/api/pokemon')
            .then(res => res.json())
            .then(data => this.allPokemon = data);
        }
      }
      , mounted() {
        this.getPokemon();
      }
    })

  </script>

</body>
</html>

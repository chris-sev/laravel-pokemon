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
<body>

  <div id="app">
    <div>@{{ message }}</div>
    <div v-if="allPokemon">
      <div v-for="pokemon in allPokemon" :key="pokemon.id">
        <h2>@{{ pokemon.name }}</h2>
        <img :src="pokemon.image" />
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script>
    const app = new Vue({
      el: '#app'
      , data: {
        allPokemon: null
        , message: 'hello'
      }
      , mounted() {
        this.getPokemon();
      }
      , methods: {
        getPokemon() {
          fetch('/api/pokemon')
            .then(res => res.json())
            .then(data => this.allPokemon = data);
        }

      }
    })

  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon JavaScript</title>

    <!-- tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div id="app">
        {{ message }}

        <div v-if="pokemon">
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                message: 'whoa',
                pokemon: null
            },
            methods: {
                getPokemon() {
                    fetch('/api/pokemon')
                        .then(res => res.json())
                        .then(data => this.pokemon = data)
                }
            },

        })
    </script>

</body>
</html>

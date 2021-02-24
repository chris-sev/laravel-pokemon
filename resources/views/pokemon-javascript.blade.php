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

  <div id="app"></div>

  <script>
    const app = document.getElementById('app');

    getPokemon();

    // get all pokemon and inject into app
    function getPokemon() {
      fetch('/api/pokemon')
        .then(res => res.json())
        .then(data => {
          data.forEach((pokemon) => {
            const el = document.createElement('div');
            el.innerHTML = `
                    <img src="${pokemon.image}" />
                    <p>${pokemon.cuteness} Cuteness</p>
              `;

            app.appendChild(el);
          })
        });
    }

  </script>

</body>
</html>

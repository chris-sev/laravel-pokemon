<div>
  <input wire:model="query" type="text" placeholder="Search pokemon..." />

  {{ $query }}

  <div>
    @foreach($allPokemon as $pokemon)
    <div>

      {{ $pokemon->name }}
      <img src="{{ $pokemon->image }}" />

    </div>
    @endforeach
  </div>

</div>

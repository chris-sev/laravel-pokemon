<div>
  {{-- In work, do what you enjoy. --}}
  <input type="text" wire:model="query" />

  @foreach ($allPokemon as $pokemon)
  <h2>{{ $pokemon->name }}</h2>
  <img src="{{ $pokemon->image }}" class="w-10" />
  @endforeach
</div>

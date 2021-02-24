<div>
  <input type="text" wire:model="query" class="border border-gray-400 p-2" />

  {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  @foreach ($allPokemon as $pokemon)
  <h2>{{ $pokemon->name }}</h2>
  <img src="{{ $pokemon->image }}" class="w-20" />
  @endforeach
</div>

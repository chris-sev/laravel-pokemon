<div>
  {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  <form wire:submit.prevent="updateName">
    <input wire:model="pokemon.name" type="text" />hi
    <button>Update Name</button>
  </form>
  <img src="{{ $pokemon->image }}" class="w-20" />

  <p>{{ $pokemon->cuteness }} cuteness</p>

  <button wire:click="incrementCuteness">Vote</button>
</div>

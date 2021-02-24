<div>
  {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

  <h2>{{ $pokemon->name }}</h2>
  <p>{{ $pokemon->cuteness }}</p>

  <button wire:click="incrementCuteness" class="p-3 bg-blue-400 text-blue-50">Vote Up</button>
</div>

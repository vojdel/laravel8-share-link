<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="w-full max-w-xs">
      <div class="px-4 py-5 sm:px-6">
            @foreach($buttons as $key => $button)
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            wire:click="share('{{$button}}')"
            >{{$button}}</button>
            @endforeach
      </div>
    </div>
</div>

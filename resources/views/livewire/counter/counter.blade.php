<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1>{{ $count }}</h1>
    <button class="px-3 py-2 bg-green-500 rounded text-white hover:bg-green-700" wire:click='increment' >Increment</button>
     <button class="px-3 py-2 bg-red-500 rounded text-white hover:bg-red-700" wire:click='decrement' >Decrement</button>

     {{-- <livewire:posts.create-post :title="$count"> --}}
</div>

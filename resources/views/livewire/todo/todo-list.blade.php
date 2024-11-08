<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <input type="text" name="" id=""
    wire:model='todo' placeholder="Todo..."
    >
    <button wire:click='add' >Add Todo</button>

    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>

        @endforeach
    </ul>
</div>

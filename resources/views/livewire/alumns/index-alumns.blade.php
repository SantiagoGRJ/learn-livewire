<div class="mx-auto max-w-[1100px] p-3 flex  gap-4 justify-center flex-col">
    {{-- Success is as dangerous as failure. --}}
    <div class="flex items-center space-x-2">
        <a
        class="px-4 py-2 bg-green-500 rounded"
        href="{{ route('alumn.create') }}">Add</a>
        <input type="text" wire:model.live='query'
        class="rounded px-4 py-2 border-gray-300 w-full"
        placeholder="Search..."
        >
    </div>

    <div class="max-w-full overflow-x-auto">

        <table class="w-full text-center">
            <thead class="bg-gray-600 text-white">
                <th class="px-3 py-2">Name</th>
                <th class="px-3 py-2">Number</th>
                <th class="px-3 py-2">Show</th>
                <th class="px-3 py-2">Edit</th>
                <th class="px-3 py-2">Delete</th>
            </thead>
            <tbody>
                @foreach ($Alumns as $alumn)
                <tr class="bg-white hover:bg-gray-300 border-b" wire:key='{{ $alumn->id }}'>
                    <td class="px-2 py-2">{{ $alumn->name }}</td>
                    <td class="px-2 py-2">{{ $alumn->number }}</td>
                    <td class="px-2 py-2">
                        <a href="{{ route('alumn.show',$alumn->id) }}"
                            class="bg-blue-600 px-3 py-[10px] rounded-md    font-light
                            hover:bg-blue-400
                            "
                            >
                            Show
                        </a>
                    </td>
                    <td class="px-2 py-2">
                        <a href="{{ route('alumn.update',$alumn->id) }}"
                        class="bg-yellow-600 px-3 py-[10px] rounded-md font-light text-white hover:bg-yellow-400"
                        >
                            Editar
                        </a>
                    </td>
                    <td class="px-2 py-2">
                        <button
                        wire:click='delete({{ $alumn->id }})'
                        wire:confirm="Are you sure you want to Delete this Alumn?"
                        class="rounded-md bg-red-600 px-3 py-2 font-light text-white hover:bg-red-700"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $Alumns->links() }}
        </div>

    </div>
</div>


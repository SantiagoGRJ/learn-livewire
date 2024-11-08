<div class="mx-auto max-w-[1100px] p-3 gap-4 flex flex-col">
    {{-- Be like water. --}}
    <div class="flex items-center ">
        <a href="{{ route('animal.create') }}"
        class="mr-2 px-4 py-2 text-white bg-green-500 rounded-md"
        >Add</a>
        <input type="text"
        class="w-full border-gray-300 rounded-md px-4 py-2"
        placeholder="Search..."
        wire:model.live='query'
        >
    </div>

    <div class="max-w-full overflow-x-auto">
        <table class="w-full text-center">
            <thead class="bg-gray-700 text-white">
                <th class="px-3 py-2" >Name</th>
                <th class="px-3 py-2">Quantity</th>
                <th class="px-3 py-2">Update</th>
                <th class="px-3 py-2">Delete</th>
            </thead>
            <tbody>
                @foreach($Animals as $animal)
                <tr class=" border-b bg-white hover:bg-gray-300" wire:key='{{ $animal->id }}'>
                    <td class="px-2 py-2">{{ $animal->name }}</td>
                    <td class="px-2 py-2">{{ $animal->quantity }}</td>
                    <td>
                        <a href="{{ route('animal.update',$animal->id) }}"
                            class="px-3 py-2 bg-yellow-600 rounded-md hover:bg-yellow-400"
                            >
                            Update
                        </a>
                    </td>
                    <td>
                        <button
                        wire:confirm='are you sure, you want to delete this Animal?'
                        wire:click='delete({{ $animal->id }})'
                        class="px-3 py-2 bg-red-600  rounded-md hover:bg-red-400"
                        >Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $Animals->links() }}
        </div>
    </div>
</div>

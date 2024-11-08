<div class="mx-auto max-w-[1100px] flex flex-col gap-4 p-6 ">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="flex items-center">
        <a href="{{ route('photo.create') }}" class="px-4 py-2 bg-green-500 mr-2 rounded-md">Add</a>
        <input class="w-full px-4 py-2 border-gray-300 rounded-lg" type="text" wire:model.live='query'>
    </div>
    <div class="max-w-full overflow-x-auto">
        <table class="w-full bg-white text-center">
            <thead class="bg-gray-500 text-white">
                <th class="px-2 py-2">Title</th>
                <th class="px-2 py-2">Photo</th>
                <th class="px-2 py-2">Show</th>
                <th class="px-2 py-2">Update</th>
                <th class="px-2 py-2">Delete</th>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    <tr wire:key='{{ $photo->id }}' class="">
                        <td class="px-2 py-2">{{ $photo->title }}</td>
                        <td class="px-2 py-2"> <img class="rounded-lg mx-auto shadow-md max-w-xs mb-4"
                                src="{{ Storage::url('photos/' . $photo->photo) }}" alt=""> </td>
                        <td class="px-2 py-2">
                            <a href="{{ route('photo.show', $photo->id) }}"
                                class="px-2 py-2 bg-blue-600 rounded-md hover:bg-blue-700 text-white font-medium">
                                Show
                            </a>
                        </td>
                        <td class="px-2 py-2">
                            <a class="px-2 py-4 bg-yellow-600 rounded-md hover:bg-yellow-700 text-white font-medium"
                                href="{{ route('photo.update', $photo->id) }}">
                                Update
                            </a>
                        </td>
                        <td class="px-2 py-2">
                            <button type="submit" wire:click='delete({{ $photo->id }})'
                                wire:confirm='are you sure, you want to delete this Photo?'
                                class="px-2 py-2 bg-red-600 rounded-md hover:bg-red-700 text-white font-medium"
                                href="">
                                delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mb-4">
            {{ $photos->links() }}
        </div>
    </div>
</div>

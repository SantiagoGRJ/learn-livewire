<div class="mx-auto max-w-[1100px] p-3 flex gap-4 justify-center flex-col">
    {{-- In work, do what you enjoy. --}}
  {{--   @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif --}}
<div class="flex items-center space-x-2">
    <a href="{{ route('post.create') }}"
       class="bg-green-500 text-white px-4 py-2 rounded">
       Add
    </a>
    <input
       class="flex-grow rounded border-gray-300 px-4 py-2"
       placeholder="Search..."
       type="text"
       wire:model.live='query'
    >
</div>

<div class="max-w-full overflow-x-auto">
    <table class="bg-white w-full  text-center">
        <thead class="bg-gray-600 text-white ">
            <th class="px-3 py-2">Title</th>
            <th class="px-3 py-2">Author</th>
            <th class="px-3 py-2">Show</th>
            <th class="px-3 py-2">Update</th>
            <th class="px-3 py-2">Delete</th>
        </thead>
        <tbody>
           @foreach ($posts as $post)
           <tr class="border-b hover:bg-gray-300" wire:key='{{ $post->id }}' >
            <td class="px-2 py-2">{{ $post->title }}</td>
            <td class="px-2 py-2">{{ $post->author }}</td>
            <td class="px-2 py-2">
                <a
                class="bg-blue-600 px-3 py-[10px] rounded-md text-white hover:bg-blue-700"
                href="{{ route('post.show',$post->id) }}">Show
                </a>
            </td>
            <td class="px-2 py-2">
                <a
                class="bg-yellow-600 px-3 py-[10px] rounded-md  text-white hover:bg-yellow-700"
                href="{{ route('post.update',$post->id) }}">
                    Update
                </a>
            </td>
            <td class="px-2 py-2">
                <button
                wire:click='delete({{ $post->id }})'
                wire:confirm='are you sure, you want to delete this Post?'
                class="bg-red-600 px-3 py-2 rounded-md  text-white hover:bg-red-700"
                href="{{ route('post.update',$post->id) }}">
                    Delete
                </button>
            </td>
          </tr>
           @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>

</div>

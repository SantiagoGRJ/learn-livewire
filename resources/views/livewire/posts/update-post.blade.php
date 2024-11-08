<div class="mx-auto max-w-[1100px] p-6 bg-white rounded-lg shadow-md mt-10">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form wire:submit='update'>
        <div class="mb-4">
            <label
            class="block text-lg font-semibold text-gray-700 mb-2"
            for="">Text</label>
            <input
            class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-700 "
            type="text" name="" id=""
        wire:model.blur='form.title'
        >
        <div class="">
            @error('form.title')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
        </div>

        <div class="mb-4">
            <label
            class="block mb-2 text-lg font-semibold text-gray-700"
            for="author">Author</label>
            <input
            class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-700"
            type="text" name="" id=""
            wire:model.blur='form.author'
            >
            <div class="">
                @error('form.author')
                <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

       <div class="flex justify-end">
        <button
        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg"
        type="submit">Update</button>
       </div>
    </form>
    <div class="mt-2 text-gray-500 text-center">
        <span
        wire:loading
        >Processing...</span>
    </div>
</div>

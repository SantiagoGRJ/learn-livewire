<div class="bg-white  md:mx-auto p-6  max-w-[1100px] mt-10 rounded-lg shadow-md">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}


    <form wire:submit='save'>
        <div class="mb-4">
            <label class="block text-lg font-semibold text-gray-700 mb-2" for="title">Title</label>
            <input class="w-full border border-gray-300 px-4 py-2 rounded-md" type="text" name="" id=""
                wire:model.blur='form.title'>
                <div class="">
                    @error('form.title')
                    <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>
        </div>
        <div class="mb-4">
            <label class="block text-lg font-semibold text-gray-700 mb-2" for="author">Author</label>
            <input class="w-full rounded-md border-gray-300 px-4 py-2 mb-2 " type="text" name=""
                id="" wire:model.blur='form.author'>
            <div class="">
                @error('form.author')
                <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="">
            <button class="w-full bg-blue-500 px-4 py-2 text-white font-semibold rounded-lg hover:bg-blue-600"
                type="submit">Save</button>
        </div>
    </form>
    <div class="mt-2 text-gray-500 text-center">
        <span wire:loading>Processing...</span>
    </div>
</div>

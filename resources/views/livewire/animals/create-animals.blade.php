<div class="bg-white mx-auto max-w-[1100px] p-6 mt-10 shadow-md rounded-md">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit='save'>
        <div class="mb-4">
            <label for=""
            class="block text-lg font-semibold text-gray-700 mb-2"
            >Name</label>
            <input
            class="w-full  border-gray-400 rounded-md px-4 py-2"
            type="text"
            wire:model='form.name'
            >
            <div class="">
                @error('form.name')
                <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label for=""
            class="block text-lg font-semibold text-gray-700 mb-2"

            >Quantity</label>
            <input type="number"
            wire:model='form.quantity'
            min="0"
            class="w-full border-gray-400 rounded-md px-4 py-2"
            >
            <div class="">
                @error('form.quantity') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="">
            <button type="submit" class="w-full mt-4 bg-blue-500 hover:bg-blue-600 px-4 py-2 font-semibold text-white rounded-md">
                Save
            </button>
        </div>
        <div class="text-center mt-2 text-gray-400">
            <span
            wire:loading
            class=""
            >Processing...</span>
        </div>
    </form>
</div>

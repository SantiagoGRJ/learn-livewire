<div class="bg-white mx-auto max-w-[1100px] p-5 mt-10 shadow-md rounded-md">
    {{-- Do your work, then step back. --}}
    <form wire:submit='update'>
        <div class="mb-4">
            <label for=""
            class="block text-lg font-semibold text-gray-600 mb-2"
            >Name</label>
            <input type="text" name="" id="" wire:model.blur='form.name'
            class="w-full border-gray-400 rounded-md px-4 py-2"
            >
            <div class="">
                @error('form.name')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label for=""
            class="block text-lg font-semibold text-gray-600 mb-2"
            >Quantity</label>
            <input type="number" name="" id="" wire:model.blur='form.quantity'
            class="w-full border-gray-400 rounded-md px-4 py-2"
            >
            <div class="">
                @error('form.quantity')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="">
            <button class="w-full bg-blue-500 hover:bg-blue-600 px-4 py-2 font-semibold text-white rounded-md">
                Update
            </button>
        </div>
        <div class="text-center mt-2 text-gray-400">
            <span
            wire:loading
            >Updating...</span>
        </div>
    </form>
</div>

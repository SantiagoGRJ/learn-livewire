<div class="mx-auto max-w-[1100px] p-6 bg-white rounded-lg shadow-lg mt-10  ">
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit='update'>
        <div class="mb-4">
            <label class="block text-lg font-semibold text-gray-700 mb-2" for="name">Name</label>
            <input type="text" wire:model="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-lg font-semibold text-gray-700 mb-2" for="number">Number</label>
            <input type="text" wire:model="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                Update
            </button>
        </div>
        <div

        class="mt-2 text-gray-500 text-center">
            <span
            wire:loading
            >Processing...</span>
        </div>
    </form>
</div>

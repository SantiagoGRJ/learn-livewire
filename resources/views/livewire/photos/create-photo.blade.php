<div class="mx-auto max-w-[1100px] p-6 mt-10 rounded-md shadow-lg">
    {{-- Do your work, then step back. --}}
    <form wire:submit='save' >
        <div class="mb-4">
            <label for=""
            class="block text-lg text-gray-700 font-semibold mb-2 "
            >Title</label>
            <input type="text" name="" id="" wire:model='form.title'
            class="w-full rounded-md border-gray-400 px-4 py-2 "
            >
            @error('form.title')
            <div class="mt-1">
                <span class="error text-red-500">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-lg font-semibold text-gray-700 mb-3" for="file">Photo</label>

            @if ($form->photoUrl)
                <div class="flex flex-col items-center">
                    <img class="rounded-lg shadow-md max-w-xs mb-4" src="{{ $form->photoUrl->temporaryUrl() }}" alt="Uploaded Photo">
                    <h1 class="text-lg font-medium text-gray-600">{{ $form->photoUrl->getClientOriginalName() }}</h1>
                </div>
            @endif

            <input
            accept=".jpg,.png"
            type="file"
            wire:model="form.photoUrl"
            class="block w-full text-gray-500 border border-gray-300 rounded-md cursor-pointer focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">

            <div class="mt-2 text-gray-400 font-semibold" wire:loading wire:target="form.photoUrl">Loading...</div>

            @error('form.photoUrl')
                <div class="mt-1">
                    <span class="error text-red-500">{{ $message }}</span>
                </div>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="px-4 py-2 bg-gray-700 text-white font-semibold text-lg rounded-md">
                Save Photo
            </button>
        </div>

    </form>
</div>

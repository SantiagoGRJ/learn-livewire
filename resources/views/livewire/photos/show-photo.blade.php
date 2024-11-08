<div class="mx-auto max-w-[500px] flex flex-col items-center p-6 mt-10 bg-white rounded-md shadow-md">
    {{-- The Master doesn't talk, he acts. --}}
    <h1 class="text-3xl text-black font-bold">Title {{ $photo->title }}</h1>
    <img class="max-w-xs rounded-md " src="{{ Storage::url('photos/'.$photo->photo ) }}" alt="">
</div>

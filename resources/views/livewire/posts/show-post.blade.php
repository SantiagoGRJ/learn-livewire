<div class="mx-auto max-w-[1100px] flex justify-center p-4" >
    {{-- The Master doesn't talk, he acts. --}}
    <div class="bg-white flex md:justify-evenly p-2 flex-wrap rounded-md shadow-md w-[400px] h-auto mt-20 text-center
    ">
        <section>
            <label
            class="text-lg  font-medium"
            for="">Name</label>
            <h4 class="text-gray-500" > {{ $post->title }}</h4>
        </section>

        <section>
            <label
            class="text-lg font-medium"
            for="">Number</label>
            <h4 class="text-gray-500"> {{ $post->author }} </h4>
        </section>


</div>

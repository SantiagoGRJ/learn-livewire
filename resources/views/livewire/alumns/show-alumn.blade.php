<div class="mx-auto max-w-[1100px] flex justify-center p-4">
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="bg-white flex md:justify-evenly p-2 flex-wrap rounded-md shadow-md w-[400px] h-auto mt-20 text-center
    ">
        <section>
            <label
            class="text-lg  font-medium"
            for="">Name</label>
            <h4 class="text-gray-500" > {{ $alumn->name }}</h4>
        </section>

        <section>
            <label
            class="text-lg font-medium"
            for="">Number</label>
            <h4 class="text-gray-500"> {{ $alumn->number }} </h4>
        </section>

    </div>


</div>

<div class="flex rounded-md relative">
    <div class="flex">

        <div class="flex flex-col justify-center pl-3 py-2">
            <p class="text-sm font-bold pb-1">{{ $name }}</p>
        </div>

        <div class="px-2 py-3">
            <div class="h-10 w-10">
                <img width="100" src="{{ url('/storage/' . $image . '') }}" alt="{{ $name }}" role="img"
                    class="h-full w-full rounded-full overflow-hidden shadow object-cover" />
            </div>
        </div>
    </div>
</div>

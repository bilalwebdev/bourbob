<div>
    <div>
        <div class="rounded shadow p-5 relative h-96 overflow-hidden whitespace-nowrap text-ellipsis group hover:shadow-orange-400/50 bg-opacity-5 hover:shadow-lg hover:bg-orange-500"
         >
            <div class="z-10">
                <div class="flex justify-center p-5 z-30">
                    <img class="drop-shadow-2xl group-hover:scale-110 ease-in-out transition duration-300" src="{{ asset('images/bottle.png') }}"
                        width="100" alt="">
                </div>
                <div class="">
                    <p class="text-2xl text-center  font-monst font-semibold capitalize">
                        {{ $bourbon->title }}</p>
                </div>
            </div>
            <div class="r-text">
                <p class="group-hover:-mt-28 duration-700 -z-10 opacity-5  drop-shadow-xl capitalize">{{ $bourbon->title }}</p>
            </div>
        </div>
    </div>
</div>

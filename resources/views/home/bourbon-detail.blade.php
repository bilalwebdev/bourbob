@extends('layout.home.master')
@section('content')
    <div class="flex min-h-screen">


        <div class="hidden product-pattren-bg lg:block">

        </div>




        <div class="w-[80%] sm:pt-32 pt-10">
            <h1
                class="ml-8 text-xl font-semibold text-center uppercase md:ml-20 lg:ml-0 whitespace-nowrap sm:whitespace-normal sm:text-6xl drop-shadow-lg">
                {{ $bourbon->title }}</h1>
            <div class="grid grid-cols-1 lg:flex">
                <div class="w-1/3 mx-auto mt-8 lg:-ml-32 lg:w-1/6">
                    <img class="max-w-[135%] drop-shadow-2xl transition  ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300"
                        src="{{ asset('images/bottle.png') }}" alt="">
                    {{-- <img class="max-w-[135%] drop-shadow-2xl" src="{{ $bourbon->image['large'] }}" alt=""> --}}
                </div>
                <div class="grid items-center w-full grid-cols-1 mt-10 lg:flex md:w-5/6 ">
                    <div class="w-1/6 h-full">
                        <div class="flex items-center justify-center md:pt-48 pt-2 h-full sm:ml-10 md:ml-36 lg:-ml-6 ">
                            <div class="w-full text-center lg:-rotate-90 ">
                                <p class="pb-5 text-6xl font-extrabold text-gray-200 in-straight-line ">
                                    Tasting Notes</p>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row lg:mt-40">
                        <div class="grid grid-cols-1 pl-10 h-52 sm:w-3/6 md:ml-40 lg:ml-0">
                            <div>
                                <p class="text-xl font-extrabold text-gray-400">Aroma</p>
                                <div class="grid grid-cols-3 lg:grid-cols-4">
                                    @foreach ($bourbon->aromas as $aroma)
                                        <a
                                            href="{{ route('all.bourbons', [
                                                'aromas[]' => $aroma->id,
                                            ]) }}">
                                            <div class="notes-pill">
                                                <p class="in-straight-line">{{ $aroma->title }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="">
                                <p class="text-xl font-extrabold text-gray-400">Flavor</p>
                                <div class="grid grid-cols-3 lg:grid-cols-4">
                                    @foreach ($bourbon->flavors as $flavor)
                                        <a
                                            href="{{ route('all.bourbons', [
                                                'flavors[]' => $flavor->id,
                                            ]) }}">
                                            <div class="notes-pill">
                                                <p class="in-straight-line">{{ $flavor->title }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <p class="text-xl font-extrabold text-gray-400">Mashbill</p>
                                <div class="grid grid-cols-3 lg:grid-cols-4">
                                    @foreach ($bourbon->mashbills as $mashbill)
                                        <a
                                            href="{{ route('all.bourbons', [
                                                'mash_bills[]' => $mashbill->id,
                                            ]) }}">
                                            <div class="notes-pill">
                                                <p>{{ $mashbill->title }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="w-screen pl-4 mt-14 sm:w-96 lg:w-1/2 space-y-7 lg:mt-0 md:ml-24 lg:ml-0">
                            {{-- <h1 class="font-semibold uppercase drop-shadow-lg">{{ $bourbon->title }}</h1> --}}
                            <div class="grid grid-cols-2 gap-2 ml-8 text-gray-500">
                                @if ($bourbon->brand)
                                    <p>Brand:<span class="ml-2 font-bold">{{ $bourbon->brand->title }}</span></p>
                                @endif
                                @if ($bourbon->producer)
                                    <p>Producer:<span class="ml-2 font-bold">{{ $bourbon->producer->title }}</span></p>
                                @endif
                                @if ($bourbon->distillery)
                                    <p class="col-span-2">Distillery:<span
                                            class="ml-2 font-bold">{{ $bourbon->distillery->title }}</span></p>
                                @endif
                                @if ($bourbon->state)
                                    <p class="col-span-2">State:<span
                                            class="ml-2 font-bold">{{ $bourbon->state->title }}</span>
                                @endif
                                </p>
                                <p>Age:<span class="ml-2 font-bold">{{ $bourbon->age }}</span></p>
                                <p>Proof:<span class="ml-2 font-bold">{{ $bourbon->proof }}</span></p>
                            </div>
                            <p class="mx-auto mr-6 text-justify text-gray-400">{{ $bourbon->description }}</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>




    </div>
@endsection

@push('scripts')
    <script>
        $('.product-slider').slick({
            // dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            //arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ],
        });
    </script>
@endpush

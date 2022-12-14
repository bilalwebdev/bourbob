<div>
    <body class="bg-white">
        <div class="container pt-10 mx-auto">

            <div class="p-4 shadow-lg bg-site-option1 shadow-site-option2/20">
                <div class="grid gap-4 md:grid-cols-2 sm:grid-cols-1">
                    <div class="font-extrabold text-7xl">
                        <div>
                            <p>Search <span class="text-site-option2">&</span> </p>
                            <p class="mt-4">Discover Bourbons</p>
                        </div>
                        <livewire:home.search>
                    </div>
                    <div>
                        <img src="{{ asset('images/bottles.png') }}" alt="">
                    </div>
                </div>
            </div>



            {{-- brand section --}}

            <section class="mt-16">

                <div class="py-8">
                    <div class="">
                        <div class="text-5xl font-bold drop-shadow-xl text">
                            <h2 class="text-center">Trending Bourbons</h2>
                        </div>

                    </div>
                    <div class="slider">
                        @foreach ($featured_bourbons as $bourbon)
                            <div class="flex items-center justify-center p-4 ml-3">
                                <a href="{{ route('bourbon', $bourbon->slug) }}">
                                    <x-product-card :bourbon="$bourbon" />
                                </a>

                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-center">
                        <a href="{{ url('/bourbons') }}" class="btn btn-primary">
                            Show all bourbons
                        </a>
                    </div>
                </div>
            </section>



            <section>
                <div class="text-5xl font-bold drop-shadow-xl text">
                    <h2 class="text-center font-monst">Brands</h2>
                    <p class="text-base text-center capitalize text-light">
                        Most Recent brands in our database
                    </p>
                </div>
                <div class="">
                    <div class="px-16 mt-5 brand-slider">

                        <div>
                            <img width="200" src="{{ asset('images/brand-logo/forester.png') }}" alt="">
                        </div>
                        <div>
                            <img width="200" src="{{ asset('images/brand-logo/elijah-craig-logo.png') }}" alt="">
                        </div>
                        <div>
                            <img width="200" src="{{ asset('images/brand-logo/knob.png') }}" alt="">
                        </div>
                        <div>
                            <img width="200" src="{{ asset('images/brand-logo/wild-turkey-logo-white.png') }}" alt="">
                        </div>
                        <div>
                            <img width="200" src="{{ asset('images/brand-logo/mitchers.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </section>


            <section class="mt-16">

                <div class="py-8">
                    <div class="">
                        <div class="text-5xl font-bold text-center font-monst">
                            Recently Added
                        </div>
                        <p class="text-base text-center capitalize text-light">
                            See the latest we have for you.
                        </p>

                    </div>
                    <div class="slider">
                        @foreach ($recently_added as $bourbon)
                            <div class="flex items-center justify-center p-4 ml-3">
                                <a href="{{ route('bourbon', $bourbon->slug) }}">
                                    <x-product-card :bourbon="$bourbon" />
                                </a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
</div>

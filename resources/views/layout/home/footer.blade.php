<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@livewireScripts
<script>
    $(document).ready(function() {
        $('.slider').slick({
            // dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
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

        $('.brand-slider').slick({
            // dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
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


    });
</script>
<script src="{{ asset('js/sequence.js') }}"></script>
<script src="{{ asset('js/sequence-theme.modern-slide-in.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.simpleLens.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
@stack('scripts')

    <footer class="mt-auto bg-gray-800 shadow md:px-6 md:py-8">
        <div class="grid items-center justify-between grid-cols-1 md:flex">
            <a href="" class="flex items-center mb-4 sm:mb-0">

                <span class="self-center text-2xl font-semibold text-white whitespace-nowrap font-monst">Bourbon Decoded</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-400 sm:mb-0">
                <li>
                    <a href="{{ route('home.about-us') }}" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="{{ route('home.privacy-policy') }}" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="{{ route('home.terms-conditions') }}" class="mr-4 hover:underline md:mr-6 ">Terms & Conditions</a>
                </li>
                <li>
                    <a href="{{ route('home.contact-us') }}" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-700 sm:mx-auto lg:my-8">
        <span class="block text-sm text-gray-400 sm:text-center">© {{ date('Y') }} <a href="" class="hover:underline">BOURBON DECODED</a>. All Rights Reserved.
        </span>
    </footer>



</body>

</html>

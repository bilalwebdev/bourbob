<div class="shadow">
    <div class="container mx-auto">
        <nav class="">
            <div class="p-4 flex justify-between">
                <div class="text-4xl font-bold text-site-option2">
                    <a href="{{ route('home') }}">
                        Bourbon Decoded
                    </a>

                </div>
                <div class="md:hidden mr-4">
                    <button type="button"
                        class="mobile-menu-button outline-none inline-flex items-center mr-2 p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden w-full md:block md:w-auto">
                    <ul
                        class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home.brands') }}">Brands</a>
                        </li>
                        <li>
                            <a href="{{ route('home.distilleries') }}">
                                Distilleris
                            </a>

                        </li>
                        <li>
                            Blogs
                        </li>
                        <li>
                            <a href="{{ route('home.about-us') }}"> About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden mobile-menu">
                <ul class="ml-48">
                    <li><a href="{{ route('home.brands') }}"
                            class="block px-2 py-4 hover:bg-orange-500 hover:rounded hover:text-white transition duration-300">Brands</a>
                    </li>
                    <li><a href="{{ route('home.distilleries') }}"
                            class="block px-2 py-4 hover:bg-orange-500 hover:rounded hover:text-white transition duration-300">distilleries</a>
                    </li>
                    <li><a href=""
                            class="block px-2 py-4 hover:bg-orange-500 hover:rounded hover:text-white transition duration-300">Blogs
                        </a>
                    </li>
                    <li><a href=""
                            class="block px-2 py-4 hover:bg-orange-500 hover:rounded hover:text-white transition duration-300">About
                            Us</a></li>
                </ul>
            </div>
        </nav>

    </div>
</div>

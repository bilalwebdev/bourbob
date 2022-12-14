<div>
    <div class="bg-red-50">
        <div class="text-4xl font-bold text-site-option2 text-center pt-6">
            Available Bourbons
        </div>
        <div class="flex justify-between px-8 pt-10 ">
            <div class="">
                <h2 class="text-2xl font-bold ">Filter</h2>
            </div>
            <div class="flex justify-end items-start">
                <div class="lg:flex sm:grid sm:grid-cols-1 bg-gray-100 p-2 rounded space-x-3 mt-5 w-96">
                    <input type="text" class="form-control" wire:model.debounce.500ms="searchTerm"
                        placeholder="Search Bourbon">
                </div>
            </div>
        </div>




            <div class="px-6 py-6">
                <div class="flex justify-center items-center flex-row">
                    <div class="ml-2 mr-5">
                        <div class="p-4 rounded-lg grid grid-cols-2 relative">
                                <div class="bg-white rounded-lg px-4 py-4 w-56 mb-4">
                                    <h4 class="text-lg font-bold bg-gray-100">Aroma</h4>
                                    <div class="">
                                        <div class="">
                                            <div>
                                                @foreach ($aromas as $aroma)
                                                    <div class="form-check inline-block">
                                                        <input wire:model="aroma"
                                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 mr-2"
                                                            type="checkbox" value="{{ $aroma->id }}">{{ $aroma->title }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg px-4 py-4 w-56 mb-4 ml-2">
                                <h4 class="text-lg font-bold bg-gray-100">Flavors</h4>
                                <div class="">
                                    <div class="flex justify-start">
                                        <div>
                                            @foreach ($flavors as $flavor)
                                                <div class="form-check inline-block">
                                                    <input name="as" wire:model="flavor"
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 mr-2"
                                                        type="checkbox" value="{{ $flavor->id }}">{{ $flavor->title }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="bg-white rounded-lg px-4 py-4 w-56 mb-4">
                                <h4 class="text-lg font-bold bg-gray-100">Mashbills</h4>
                                <div class="">
                                    <div class="flex justify-start">
                                        <div>
                                            @foreach ($mashbills as $mashbill)
                                                <div class="form-check inline-block">
                                                    <input wire:model="mashbill"
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 mr-2"
                                                        type="checkbox"
                                                        value="{{ $mashbill->id }}">{{ $mashbill->title }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="bg-white rounded-lg px-4 py-4 w-60 mb-4 ml-2">
                                <h4 class="text-lg font-bold bg-gray-100">Distilleries</h4>
                                <div class="">
                                    <div class="flex justify-start">
                                        <div>
                                            @foreach ($distilleries as $distillery)
                                                <div class="form-check inline-block">
                                                    <input wire:model="distillery"
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 mr-2"
                                                        type="checkbox"
                                                        value="{{ $distillery->title }}">{{ $distillery->title }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="bg-white rounded-lg px-4 py-4 w-56 mb-4">
                                    <h4 class="text-lg font-bold bg-gray-100">Brands</h4>
                                <div class="">
                                    <div class="flex justify-start">
                                        <div>
                                            @foreach ($brands as $brand)
                                                <div class="form-check inline-block">
                                                    <input wire:model="brand_filter"
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 mr-2"
                                                        type="checkbox" value="{{ $brand->title }}">{{ $brand->title }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                                {{-- <button type="submit" class="py-2 px-3 mt-3 md:mt-6 text-sm font-bold text-center text-white  bg-amber-800 rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-amber-800 dark:hover:bg-amber-800 dark:focus:ring-amber-800">
                                Apply Filter
                                </button> --}}
                        </div>
                    </div>
                    @if (count($bourbons))
                    <div class="grid grid-cols-4 gap-4 ml-2">
                        @foreach ($bourbons as $bourbon)
                            <div
                                class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 flex justify-center items-center flex-col">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold  text-gray-900 dark:text-white">
                                        {{ $bourbon->title }}</h5>
                                </a>

                                <a href="{{ route('bourbon', $bourbon->slug) }}"
                                    class="py-2 px-3 mt-3 md:mt-6 text-sm font-bold text-center text-white  bg-amber-800 rounded-lg hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-amber-800 dark:hover:bg-amber-800 dark:focus:ring-amber-800">
                                    View Details
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @else
            <div class="flex justify-center items-center py-10">
                <div
                    class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 flex justify-center items-center ">
                    <h5 class="mb-2 text-2xl font-bold  text-gray-900 dark:text-white">No bourbons in this brand :(</h5>
                </div>
            </div>
        @endif
        <div class="py-4 px-16 flex justify-end items-start">
            {{ $bourbons->links() }}
        </div>

    </div>
</div>

@push('scripts')
 <script>
    $('input[type=checkbox]').each(function (index, checkbox){
       // console.log(index);
     if (index == 0) {
     checkbox.checked = false;
    }
 });
 </script>
@endpush

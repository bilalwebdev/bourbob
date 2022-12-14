<div>
    <div class="flex p-2 mt-5 space-x-3 bg-gray-100 rounded ">
        <input type="text" wire:model.debounce.500ms='query' id="input" class="form-control"
            placeholder="Search Bourbon, Brand">
    </div>
    <div class="p-1 space-x-3 text-sm rounded">
        @if (!empty($query) && strlen($query) > 3)
            <div class="px-2 bg-gray-100">
                <h1 class="py-1 text-xl text-center">Available Bourbons</h1>
                @if (!empty($bourbons))

                    @foreach ($bourbons as $bourbon)
                        <div class="py-2 font-semibold">
                            <a class="pt-2" href="{{ route('bourbon', $bourbon['slug']) }}">
                                {{ $bourbon['title'] }}
                            </a>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <div class="px-2 py-2 font-semibold bg-gray-100">
                        No result found!
                    </div>
                @endif
                <h1 class="py-1 text-xl text-center">Available Brands</h1>
                @if (!empty($brands))
                    @foreach ($brands as $brand)
                        <div class="py-2 font-semibold">
                            <a class="my-2"
                                href="{{ route('all.bourbons', [
                                    'brands[]' => $brand['id'],
                                ]) }}">
                                {{ $brand['title'] }}
                            </a>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <div class="px-2 py-2 font-semibold bg-gray-100">
                        No result found!
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>

<div>
    <div class="container mx-auto">


        <div class="grid grid-cols-12 mt-10">
            <div class="col-span-2">
                <div class="space-y-8">
                    <div>
                        <p class="text-lg font-bold text-gray-400">Brands</p>
                        @foreach ($av_brands as $brand)
                            <div>
                                <input type="checkbox" class="filter-checkbox" wire:model="brands"
                                    value="{{ $brand->id }}">
                                <label class="font-monst" for="">{{ $brand->title }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p class="text-lg font-bold text-gray-400">Aromas</p>
                        @foreach ($av_aromas as $aroma)
                            <div>
                                <input type="checkbox" class="filter-checkbox" wire:model="aromas"
                                    value="{{ $aroma->id }}">
                                <label class="font-monst" for="">{{ $aroma->title }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p class="text-lg font-bold text-gray-400">Flavors</p>
                        @foreach ($av_flavors as $flavor)
                            <div>
                                <input type="checkbox" class="filter-checkbox" wire:model="flavors"
                                    value="{{ $flavor->id }}">
                                <label class="font-monst" for="">{{ $flavor->title }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p class="text-lg font-bold text-gray-400">MashBills</p>
                        @foreach ($av_mash_bills as $mash_bill)
                            <div>
                                <input type="checkbox" class="filter-checkbox " wire:model="mash_bills"
                                    value="{{ $mash_bill->id }}">
                                <label class="font-monst" for="">{{ $mash_bill->title }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p class="text-lg font-bold text-gray-400">Producers</p>
                        @foreach ($av_producers as $producer)
                            <div>
                                <input type="checkbox" class="filter-checkbox" wire:model="producers"
                                    value="{{ $producer->id }}">
                                <label class="font-monst" for="">{{ $producer->title }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p class="text-lg font-bold text-gray-400">Distilleries</p>
                        @foreach ($av_distilleries as $distillery)
                            <div>
                                <input type="checkbox" class="filter-checkbox" wire:model="distillerys"
                                    value="{{ $distillery->id }}">
                                <label class="font-monst" for="">{{ $distillery->title }}</label>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-span-10">

                <div>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-4">

                        @foreach ($bourbons as $bourbon)
                            <a href="{{ route('bourbon', $bourbon->slug) }}">
                                <x-product-card :bourbon="$bourbon" />
                            </a>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>

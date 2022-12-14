<div>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Mashbills
                </h2>
            </div>
            <div class="p-5">
                <div class="flex ">
                    <div wire:ignore class="mt-3 grow">
                        <label for="update-profile-form-3" class="form-label">Select Mashbills</label>
                        <select wire:model="selected_mashbill_id" id="update-profile-form-3" data-search="true"
                            class="w-full capitalize form-select" required>
                            <option value="">Select Mashbill</option>
                            @foreach ($mashbillsList as $mashbill)
                                <option value="{{ $mashbill->id }}">
                                    {{ $mashbill->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-end justify-end ml-2">
                        <button wire:click="addMashbill" type="button" class="w-20 mt-3 btn btn-primary">Add</button>
                    </div>
                    @error('selected_mashbill_id')
                        <?php
                        $this->emit('error', $message);
                        ?>
                    @enderror
                </div>

                <div class="mt-5">
                    <div class="grid grid-cols-2">
                        @foreach ($addedMashbills as $i => $sMashbill)
                            <div class="flex justify-end mt-5 " wire:key="mash-bill-{{ $sMashbill['id'] }}">
                                <div class="flex items-center justify-end col-span-1 text-base font-semibold">
                                    {{ $sMashbill['title'] }}: &nbsp;%</div>
                                <div class="flex col-span-2">
                                    <input type="number" class="form-control"
                                        wire:model="addedMashbills.{{ $i }}.pivot.amount">
                                    <button class="p-2 text-white bg-red-500"> <i class="fa-regular fa-trash-can"
                                            wire:click="deleteAddedMashbill({{ $sMashbill['id'] }})"> </i>
                                        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex items-end justify-start">
                        <button wire:click="updateMashBills" type="button"
                            class="w-20 mt-3 btn btn-primary">Save</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Flavors
                </h2>
            </div>
            <div class="p-5">
                <div class="flex ">
                    <div wire:ignore class="mt-3 grow">
                        <label for="update-profile-form-3" class="form-label">Select Flavors</label>
                        <select wire:model="selected_flavor_id" id="update-profile-form-3" data-search="true"
                            class="w-full capitalize form-select" required>
                            <option value="">Select Flavor</option>
                            @foreach ($flavorsList as $flavor)
                                <option value="{{ $flavor->id }}">
                                    {{ $flavor->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-end justify-end ml-2">
                        <button wire:click="addFlavor" type="button" class="w-20 mt-3 btn btn-primary">Add</button>
                    </div>
                    @error('selected_flavor_id')
                        <?php
                        $this->emit('error', $message);
                        ?>
                    @enderror
                </div>

                <div class="mt-5">
                    <div class="">
                        <p class="text-xs text-gray-400">Click to make the flavor dominant for search</p>

                        <div class="grid grid-cols-4 gap-2 mt-2">
                            @foreach ($addedFlavors as $i => $addedFlavor)
                                <div class="flex border rounded cursor-pointer">
                                    <div wire:click="markDominantFlavor({{ $addedFlavor['id'] }})"
                                        class="grow p-2 @if ($addedFlavor['pivot']['dominant']) bg-gradient-to-r from-orange-500 to-orange-400 text-white font-bold border-lime-400 @endif">
                                        {{ $addedFlavor['title'] }}</div>
                                    <div wire:click="deleteAddedFlavor({{ $addedFlavor['id'] }})">
                                        <div class="p-2 text-white bg-red-500">
                                            <i class="fa-regular fa-trash-can">
                                            </i><svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Aromas
                </h2>
            </div>
            <div class="p-5">
                <div class="flex ">
                    <div wire:ignore class="mt-3 grow">
                        <label for="update-profile-form-3" class="form-label">Select Aromas</label>
                        <select wire:model="selected_aroma_id" id="update-profile-form-3" data-search="true"
                            class="w-full capitalize form-select" required>
                            <option value="">Select Aroma</option>
                            @foreach ($aromasList as $aroma)
                                <option value="{{ $aroma->id }}">
                                    {{ $aroma->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-end justify-end ml-2">
                        <button wire:click="addAroma" type="button" class="w-20 mt-3 btn btn-primary">Add</button>
                    </div>
                    @error('selected_aroma_id')
                        <?php
                        $this->emit('error', $message);
                        ?>
                    @enderror
                </div>

                <div class="mt-5">
                    <div class="">
                        <p class="text-xs text-gray-400">Click to make the flavor dominant for search</p>

                        <div class="grid grid-cols-4 gap-2 mt-2">
                            @foreach ($addedAromas as $i => $addedAroma)
                                <div class="flex border rounded cursor-pointer">
                                    <div wire:click="markDominantAroma({{ $addedAroma['id'] }})"
                                        class="grow p-1 @if ($addedAroma['pivot']['dominant']) bg-gradient-to-r from-orange-500 to-orange-400 text-white font-bold border-lime-400 @endif">
                                        {{ $addedAroma['title'] }}</div>
                                    <div wire:click="deleteAddedAroma({{ $addedAroma['id'] }})">
                                        <div class="p-2 text-white bg-red-500">
                                            <i class="fa-regular fa-trash-can">
                                            </i><svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

<div>


    @include('dashboard.distillery.components.add-distillery')

    <div class="grid grid-cols-12 gap-6 mt-5" wire:ignore.self>
        <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">

            {{ $distilleries->links('dashboard.components.custom-paginate') }}

            <div class="w-full mt-3 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                <div class="relative w-56 text-slate-500">
                    <input type="text" class="w-56 pr-10 form-control box" placeholder="Search..."
                        wire:model.debounce.500ms="searchTerm">
                    <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->

        <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
            <table class="table -mt-2 table-report">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">Name </th>

                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($distilleries as $distillery)
                        <tr class="intro-x" wire:ignore.self>

                            <td class="flex flex-col font-medium capitalize whitespace-nowrap">
                                @if ($editRowId !== $distillery->id)
                                    {{ $distillery->title }}
                                @else
                                    <input class="form-control" type="text" wire:model="titleToEdit">
                                    @error('titleToEdit')
                                        <span class="mt-2 text-danger">* {{ $message }}</span>
                                    @enderror
                                @endif
                            </td>

                            <td class="w-56 table-report__action">
                                <div class="flex items-center justify-between">
                                    @if ($editRowId !== $distillery->id)
                                        <button wire:click.prevent="editRow({{ $distillery->id }})"
                                            class="flex items-center p-2 mr-3 text-white bg-purple-800 rounded">
                                            <i class="fa-regular fa-pen-to-square"></i> <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>Edit</button>
                                    @else
                                        <button wire:click.prevent="updateRow" class="text-white btn bg-success">
                                            Save </button>
                                    @endif


                                    <button wire:click="$emit('triggerDelete',{{ $distillery->id }})" ƒ
                                        class="flex items-center p-2 text-white bg-red-700 rounded" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal"><i
                                            class="fa-regular fa-trash-can"></i> <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                          </svg> Delete </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END: Data List -->




    </div>


    <x-entity-delete trigger="triggerDelete" message="Distillery will be deleted!" />

</div>

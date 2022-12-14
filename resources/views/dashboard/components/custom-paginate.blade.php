<div class="flex w-full space-x-6">
    <div>
        <select wire:model="paginatedItems" class="w-20 mt-3 form-select box sm:mt-0">
            <option>15</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>

    <div class="flex">
        <button class="w-20 bg-gray-300 btn btn-default hover:bg-gray-400 disabled:bg-gray-200 dark:bg-darkmode-800 " @if ($paginator->onFirstPage()) disabled @endif
            wire:click="previousPage">
            Prev
        </button>
        <button class="w-20 bg-gray-300 btn btn-default hover:bg-gray-400 disabled:bg-gray-200 dark:bg-darkmode-800"
            @if (!$paginator->hasMorePages()) disabled @endif wire:click="nextPage">
            Next
        </button>
    </div>

</div>

<div>

    <div class="p-4 bg-white rounded dark:bg-darkmode-600">
        <form wire:submit.prevent="createRow">
            <div class="gap-y-3">
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input id="name" wire:model="title" type="text" class="form-control" placeholder="Enter Mashbill Name"
                        autocomplete="aroma-off" autofill="aroma-off" required>

                    @error('title')
                        <span class="mt-2 text-danger">* {{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="flex justify-end mt-2">
                <button type="submit" class="w-20 btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

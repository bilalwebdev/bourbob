<div>

    <div class="bg-white rounded p-4">
        <form wire:submit.prevent="createRow">
            <div class="gap-y-3">
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input id="name" wire:model="title" type="text" class="form-control" placeholder="Enter Category Name"
                        autocomplete="aroma-off" autofill="aroma-off" required>

                    @error('title')
                        <span class="text-danger mt-2">* {{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="flex justify-end mt-2">
                <button type="submit" class="btn btn-primary w-20">Save</button>
            </div>
        </form>
    </div>
</div>

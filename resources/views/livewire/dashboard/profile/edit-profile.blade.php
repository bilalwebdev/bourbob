<div>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="">
            <div class="p-4 bg-white rounded card dark:bg-darkmode-600">
                <div class="card-body">
                    <form wire:submit.prevent="updateInfo">

                        <div class="mb-2 form-group">
                            <label for="">Name</label>
                            <input type="text" wire:model="name" placeholder="Enter name " class="mt-1 form-control">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" wire:model="email" placeholder="Enter email" class="mt-1 form-control">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="mt-2 btn btn-primary">Update Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ml-2">
            <div class="p-4 bg-white rounded card dark:bg-darkmode-600">
                <div class="card-body">
                    <form wire:submit.prevent="updatePassword">

                        <div class="mb-2 form-group">
                            <label for="">Password</label>
                            <input type="password" wire:model="password" placeholder="Password" class="mt-1  form-control">
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Pasword</label>
                            <input type="password" wire:model="confirm_password" placeholder="Confirm Password"
                                class="mt-1 form-control">
                            @error('confirm_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="mt-2 btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

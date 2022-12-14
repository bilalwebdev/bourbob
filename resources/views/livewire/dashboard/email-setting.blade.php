<div>
    <div class="w-full p-4 space-y-10 bg-white rounded-lg card dark:bg-darkmode-400">
        <div class="card-body">

            <div class="mt-4">
                <form wire:submit.prevent="saveSetting">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="">Host</label>
                                <input type="text" wire:model="email.host" class="form-control"
                                    placeholder="smtp.example.com">
                                @error('email.host')
                                    <span class="text-red-500">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Port</label>
                                <input type="text" wire:model="email.port" class="form-control"
                                    placeholder="25 or 465 or 587 or 2525">
                                @error('email.port')
                                    <span class="text-red-500">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Encryption</label>
                                <input type="text" wire:model="email.encryption" class="form-control"
                                    placeholder="tls">
                                @error('email.encryption')
                                    <span class="text-red-500">* {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" wire:model="email.username" class="form-control"
                                    placeholder="Username">
                                @error('email.username')
                                    <span class="text-red-500">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" wire:model="email.password" class="form-control"
                                    placeholder="********">
                                @error('email.password')
                                    <span class="text-red-500">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Mail From Address</label>
                                <input type="text" wire:model="email.mail_from" class="form-control"
                                    placeholder="john@doe.com">
                                @error('email.mail_from')
                                    <span class="text-red-500">* {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 form-group">
                        <label for="">Mail To Address</label>
                        <input type="text" wire:model="email.mail_to" class="form-control"
                            placeholder="john@doe.com">
                        @error('email.mail_to')
                            <span class="text-red-500">* {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

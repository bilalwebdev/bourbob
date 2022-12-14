<div>
    <div class="container p-10 mx-auto my-auto">
        <div class="lg:flex">
            <div class="w-full p-6 rounded-lg shadow-xl bg-site-option1 shadow-site-option2/20">
                <h1 class="py-3 text-4xl font-bold text-center">Get in touch</h1>
                <hr>
                <form action="" wire:submit.prevent='submit'>
                    <div class="grid grid-cols-1 gap-2 mt-3 sm:grid-cols-2">
                        <div class="form-group">
                            <label for="" class="text-sm">First Name</label>
                            <input type="text" wire:model='first_name' id=""  class="mt-1 form-control focus:ring-2 focus:outline-none focus:ring-orange-300" required>
                            @error('first_name')
                                <span class="text-red-700 error">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label class="text-sm" for="">Last Name</label>
                            <input type="text" wire:model='last_name' id=""  class="mt-1 form-control focus:ring-2 focus:outline-none focus:ring-orange-300" required>
                            @error('last_name')
                                <span class="text-red-700 error">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="grid grid-cols-1 gap-2 mt-4 sm:grid-cols-2">
                        <div class="form-group">
                            <label class="text-sm" for="">Email</label>
                            <input type="email" wire:model='email' id=""  class="mt-1 form-control focus:ring-2 focus:outline-none focus:ring-orange-300" required>
                            @error('email')
                                <span class="text-red-700 error">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label class="text-sm" for="">Phone</label>
                            <input type="tel" wire:model='phone' id=""  class="mt-1 form-control focus:ring-2 focus:outline-none focus:ring-orange-300" required>
                            @error('phone')
                                <span class="text-red-700 error">{{ $message }}</span>
                            @enderror
                          </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-sm" for="">Message</label>
                        <textarea wire:model='message' id="" cols="30" rows="10"  class="mt-1 form-control focus:ring-2 focus:outline-none focus:ring-orange-300" required></textarea>
                        @error('message')
                                <span class="text-red-700 error">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="mt-2">
                        <button type="submit"
                        class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none
                         focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                          text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                        <div wire:loading wire:target="submit">

                            <x-action-loader />
                        </div>
                        <div wire:loading.remove wire:target="submit">
                            Submit
                        </div>
                    </button>
                    @if (session()->has('email-success'))
                        <div class="p-4 mt-4 rounded bg-lime-300 text-lime-600 shadow-lime-500">
                            Message Received Successfully
                        </div>
                    @endif
                    </div>
                </form>


            </div>

            <div class="flex items-center justify-center w-full mt-6 lg:w-1/2 lg:mt-0">
                <img src="{{ asset('images/bottles.png') }}" alt="">
            </div>
        </div>
    </div>

</div>

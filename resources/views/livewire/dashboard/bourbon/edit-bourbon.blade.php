<div>
    <h2 class="mt-10 mb-2 text-lg font-medium intro-y">
        Update Bourbon
    </h2>

    <div>
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Bourbon Info
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col xl:flex-row">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="bourbon-title" class="form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Bourbon Title"
                                            wire:model="bourbon.title">
                                    </div>




                                    <div class="mt-3">
                                        <label for="bourbon-title" class="form-label">Age</label>
                                        <input type="number" class="form-control" wire:model="bourbon.age"
                                            placeholder="Bourbon Age" wire:model="">
                                        @error('bourbon.age')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="bourbon-title" class="form-label">Proof</label>
                                        <input type="number" class="form-control" wire:model="bourbon.proof"
                                            placeholder="Bourbon Proof" wire:model="">
                                        @error('bourbon.proof')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div wire:ignore class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3" class="form-label">State</label>
                                        <select wire:model="bourbon.state_id" id="update-profile-form-3"
                                            data-search="true" class="w-full capitalize form-select">
                                            <option value="">Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}"
                                                    @if ($bourbon->state_id == $state->id) selected @endif>
                                                    {{ $state->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div wire:ignore class="mt-3">
                                        <label for="update-profile-form-3" class="form-label">Brand</label>
                                        <select wire:model="bourbon.brand_id" id="update-profile-form-3"
                                            data-search="true" class="w-full capitalize form-select">
                                            <option value="">Select Brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"
                                                    @if ($bourbon->brand_id == $brand->id) selected @endif>
                                                    {{ $brand->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div wire:ignore class="mt-3">
                                        <label for="update-profile-form-3" class="form-label">Producers</label>
                                        <select wire:model="bourbon.producer_id" id="update-profile-form-3"
                                            data-search="true" class="w-full capitalize form-select">
                                            <option value="">Select Producer</option>
                                            @foreach ($producers as $producer)
                                                <option value="{{ $producer->id }}"
                                                    @if ($bourbon->producer_id == $producer->id) selected @endif>
                                                    {{ $producer->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div wire:ignore class="mt-3">
                                        <label for="update-profile-form-3" class="form-label">Distillery</label>
                                        <select wire:model="bourbon.distillery_id" id="update-profile-form-3"
                                            data-search="true" class="w-full capitalize form-select">
                                            <option value="">Select Distillery</option>
                                            @foreach ($distilleries as $distillery)
                                                <option value="{{ $distillery->id }}"
                                                    @if ($bourbon->distillery_id == $distillery->id) selected @endif>
                                                    {{ $distillery->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="bourbon-title" class="form-label">Internal Note</label>
                                        <input type="text" class="form-control" wire:model="bourbon.note"
                                            placeholder="Internal Note" wire:model="">
                                    </div>

                                </div>

                                <div class="grid items-end grid-cols-2 col-span-12 gap-4">
                                    <div class="mt-3">
                                        <label for="" class="form-label">Description</label>
                                        <textarea class="form-control" wire:model="bourbon.description" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div>
                                        <div class="mt-3">
                                            <label for="bourbon-title" class="form-label">Video <span
                                                    class="text-xs text-gray-500">(Youtube/Vimeo)</span></label>
                                            <input type="text" wire:model="bourbon.video" class="form-control"
                                                placeholder="Bourbon Video">
                                        </div>
                                        @if ($bourbon->video)
                                            <div class="mt-2">
                                                <iframe src="{{ $bourbon->video }}"
                                                    class="w-full rounded shadow aspect-video" frameborder="0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <button wire:click="updateBourbon" type="button"
                                class="w-20 mt-3 btn btn-primary">Save</button>
                        </div>
                        <div class="mx-auto w-52 xl:mr-0 xl:ml-6">
                            <div
                                class="p-5 border-2 border-dashed rounded-md shadow-sm border-slate-200/60 dark:border-darkmode-400">
                                <div class="relative mx-auto cursor-pointer h-60 image-fit zoom-in">
                                    <img class="rounded-md" alt="Bourbon image"
                                        src="{{ $bourbon->image['small'] }}">
                                </div>

                                <div wire:ignore class="relative mx-auto mt-5 cursor-pointer">
                                    <div class="Uppy file-input "></div>
                                    <div class="UppyProgressBar"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END: Display Information -->

        </div>
    </div>



</div>


@push('style')
    <link href="https://releases.transloadit.com/uppy/v2.3.2/uppy.min.css" rel="stylesheet">
@endpush


@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://releases.transloadit.com/uppy/v2.3.2/uppy.min.js"></script>


    <script>
        let bucketUrl = @js(env('AWS_BUCKET_URL'))


        var uppy = new Uppy.Core({
            debug: true,
            autoProceed: true,
            restrictions: {
                maxNumberOfFiles: 1
            }
        })
        const {
            FileInput,
            AwsS3,
            ProgressBar
        } = Uppy


        uppy.use(FileInput, {
            target: '.Uppy',

            locale: {
                strings: {
                    // The same key is used for the same purpose by @uppy/robodog's `form()` API, but our
                    // locale pack scripts can't access it in Robodog. If it is updated here, it should
                    // also be updated there!
                    chooseFiles: 'Change Photo',
                },
            },
        })
        uppy.use(ProgressBar, {
            target: '.UppyProgressBar',
            hideAfterFinish: false,
        })
        uppy.use(AwsS3, {
            getUploadParameters(file) {

                return fetch("{{ route('dashboard.preurl') }}", {
                    method: 'post',

                    headers: {
                        accept: 'application/json',
                        'content-type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    body: JSON.stringify({
                        _token: "{{ csrf_token() }}",
                        filename: file.name,
                        contentType: file.type,

                    }),
                }).then((response) => {
                    return response.json()
                }).then((data) => {

                    return {
                        method: data.method,
                        url: data.url,
                        headers: {
                            'Content-Type': file.type,
                        },
                    }
                })
            },
            limit: 1,
            timeout: 0
        })

        uppy.on('upload-success', (file, response) => {

            console.log({
                response
            })
            console.log({
                file
            })
            let url = response.uploadURL
            let key = url.replace(bucketUrl + '/', '')

            console.log({
                url
            })
            console.log({
                key
            })
            @this.call('saveImage', key)
        })
    </script>
@endpush

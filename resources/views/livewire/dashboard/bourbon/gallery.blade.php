<div>
    Gallery
    <div wire:ignore class="flex justify-center mt-5 w-full">
        <div class="gallery"></div>
    </div>


    <div class="mt-10">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($images as $image)
                <div class="bg-white p-2 shadow-sm rounded flex justify-center items-center flex-col ">
                    <img src="{{ $image->image['medium'] }}" alt="" srcset="" width="540">
                    <div class="mt-2">
                        <button wire:click="deleteImage({{ $image->id }})" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            @endforeach
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
            autoProceed: false,
            restrictions: {
                // maxNumberOfFiles: 1
            }
        })
        const {
            Dashboard,
            AwsS3
        } = Uppy


        uppy.use(Dashboard, {
            id: 'Dashboard',
            target: '.gallery',
            metaFields: [],
            trigger: null,
            inline: true,
            proudlyDisplayPoweredByUppy: false,
            thumbnailWidth: 280,

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


            let url = response.uploadURL
            let key = url.replace(bucketUrl + '/', '')


            @this.call('saveImage', key)
        })
    </script>
@endpush

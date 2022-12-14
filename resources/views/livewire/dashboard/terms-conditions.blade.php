<div>

    <div class="space-y-10 bg-white rounded p-4ull w-f dark:bg-gray-800">

        <form wire:submit.prevent = "save" class="p-6">
            <div class="mb-2 form-group">


                <div wire:ignore>
                    <textarea wire:model="site.terms_conditions" id="myeditorinstance" rows="20" class="w-full text-black dark:text-white form-control" ></textarea>
                </div>
            </div>


            <div class="mb-4 ">
                <button type="submit"   class=" btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>



@push('script')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'powerpaste advcode table lists advlist checklist image  autolink emoticons',
            toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table | image | emoticons',
            setup: function(ed) {
                ed.on('change', function(e) {

                    @this.updateContent(ed.getContent())
                });
            }
        });
    </script>
@endpush

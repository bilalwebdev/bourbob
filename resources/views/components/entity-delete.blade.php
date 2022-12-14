@push('script')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {

            @this.on('{{ $trigger }}', entityId => {
                Swal.fire({
                    title: 'Are You Sure?',
                    icon: 'warning',
                    text: '{{ $message }}',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: 'green',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete it!',
                    cancelButtonText: 'No, Cancel'
                }).then((result) => {
                    //if user clicks on delete
                    if (result.value) {
                        // calling destroy method to delete
                        @this.call('destroy', entityId)
                        // success response


                    }
                });
            });
        })
    </script>
@endpush

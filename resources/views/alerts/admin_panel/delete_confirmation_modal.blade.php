{{-- Deleting Service Images --}}
<script>
    $('.sweet_delete').on('click', function (event) {
        event.preventDefault();
        const action = $(this).data('action');

        Swal.fire({
            title: "Are you sure ?",
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
        })
            .then((result) => {
                if (result.isConfirmed) {
                    window.location.href = action;
                }
                return false;
            })
    });
</script>

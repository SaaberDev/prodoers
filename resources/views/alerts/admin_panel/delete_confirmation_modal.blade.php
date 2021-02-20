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
            confirmButtonColor: 'rgb(0 0 0)',
            cancelButtonColor: 'rgb(204 75 75)',
            background: 'rgb(235 246 236)',
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

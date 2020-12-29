<script>
    $('#delete_banner').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

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
                    $.ajax({
                        url: "{{ route('services.category.destroyBannerImage', $service_categories->id) }}",
                        type: 'DELETE',
                        data: {
                            _token: token,
                            id: id
                        },
                        success: function (data) {
                            // alert(data);
                            window.location.href = url;
                        }
                    })
                }
                return false;
            })
    });

    $('#delete_thumbnail').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "This record and it's details will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        })
    });
</script>

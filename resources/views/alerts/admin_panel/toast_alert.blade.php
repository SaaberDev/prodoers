{{-- Controller Alert Scripts [ SweetAlert ] --}}
<script>
    @if(Session::has('message'))
    const type = "{{ Session::get('alert-type', 'message') }}";
    switch(type){
        case 'success':
            Swal.fire({
                // title:'Successfully Added!',
                text:"{{ Session::get('message') }}",
                icon: "success",
                timer:3000,
            })
            break
        case 'warning':
            Swal.fire({
                // title:'Access Denied',
                text:"{{ Session::get('message') }}",
                icon: "warning",
            })
            break
        case 'success_toast':
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('message') }}"
            })
            break
    }
    @endif
</script>

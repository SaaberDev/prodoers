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
                // position: 'bottom-left',
                position: 'top-right',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 1500,
                showClass: {
                    popup: 'swal2-show',
                    backdrop: 'swal2-backdrop-show',
                    icon: 'swal2-icon-show',
                },
                hideClass: {
                    popup: 'swal2-hide',
                    backdrop: 'swal2-backdrop-hide',
                    icon: 'swal2-icon-hide'
                },
                customClass: 'swal-toast-height',
                // background: '#E9EFE8'
                background: 'rgb(244 255 244)'
            })
            Toast.fire({
                icon: 'success',
                title: "{{ Session::get('message') }}"
            })
            break
    }
    @endif
</script>

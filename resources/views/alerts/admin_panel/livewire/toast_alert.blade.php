{{-- Livewire Alert Scripts [ SweetAlert ] --}}
<script>
    window.addEventListener('success_toast',function(e){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 2000,
            showClass: {
                popup: '',
                icon: ''
            },
            hideClass: {
                popup: '',
            },
        })
        Toast.fire(e.detail)
    });
</script>

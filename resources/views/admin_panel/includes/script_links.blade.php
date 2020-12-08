<script src="js/bootstrap4/jquery.min.js"></script>

<!-- Popper.js first, then Bootstrap JS -->
<script src="js/bootstrap4/popper.min.js" ></script>

<script src="js/bootstrap4/js/bootstrap.min.js"></script>

<script src="js/offcanvas.js"></script>

<script src="js/toggle/bootstrap-toggle.min.js"></script>

<script src="js/toaster/toastr.min.js"></script>

<script src="js/tagify/tagify.min.js"></script>

<script defer src="js/fontawesome/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $("#single").select2({
        placeholder: "Select a programming language"
        , allowClear: true
    });
    $("#multiple").select2({
        placeholder: "Assign Permissions"
        , allowClear: true
    });
</script>

<script>
    $(function () {
        $('#toggle-event').change(function () {
            $('#console-event').html('Toggle: ' + $(this).prop('checked'))
        })
    })
</script>

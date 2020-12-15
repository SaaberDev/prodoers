<script src="js/bootstrap5/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap5/bootstrap.min.js"></script>
<script src="js/count.js"></script>
<script src="js/video.js"></script>
<script src="js/offcanvas.js"></script>
<script src="js/loader.js"></script>

{{-- Filepond --}}
<script src="filepond/js/filepond-plugin-file-encode.min.js"></script>
<script src="filepond/js/filepond-plugin-file-validate-size.min.js"></script>
<script src="filepond/js/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="filepond/js/filepond-plugin-image-preview.min.js"></script>
<script src="filepond/js/filepond.min.js"></script>

<script>
    /*
    We want to preview images, so we need to register the Image Preview plugin
    */
    FilePond.registerPlugin(
        // encodes the file as base64 data
        FilePondPluginFileEncode
        , // validates the size of the file
        FilePondPluginFileValidateSize
        , // corrects mobile image orientation
        FilePondPluginImageExifOrientation
        , // previews dropped images
        //  FilePondPluginImagePreview
    );
    // Select the file input and use create() to turn it into a pond
    FilePond.create(document.getElementById('filePondinput1'), {
        labelIdle: `<span class="filepond--label-action">Browse Image</span>`
        , });
    // Select the file input and use create() to turn it into a pond
    FilePond.create(document.getElementById('filePondinput2'), {
        labelIdle: `<span class="filepond--label-action">Browse File</span>`
        , });
</script>




<script src="js/owl.carousel.min.js"></script>
<script>
    $(".owl-carousel").owlCarousel({
        pagination: true,
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        dots: false, //nav: false,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
            },
            500: {
                items: 1,
                nav: true,
                loop: true,
            },
            768: {
                items: 1,
                nav: true,
                loop: true,
            },
            1000: {
                items: 1,
                nav: true,
                loop: true,
            }
        }
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [0])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
</script>

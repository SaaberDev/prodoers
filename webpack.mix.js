const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// Laravel Default
mix.js('resources/js/app.js', 'public/js/app.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        //
    ])

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Assets
    |--------------------------------------------------------------------------
    */
    .styles([
        'resources/_assets/_admin_panel/fonts/fonts.css',
        'resources/_assets/_admin_panel/css/bootstrap4/css/bootstrap.min.css',
        'resources/_assets/_admin_panel/css/menukit.css',
        'resources/_assets/_admin_panel/css/toaster/toastr.min.css',
        'resources/_assets/_admin_panel/css/fontawesome/font-awesome.min.css',
        'resources/_assets/_admin_panel/css/toggle/bootstrap-toggle.min.css',
        'resources/_assets/_admin_panel/css/tagify/tagify.css',
        'resources/_assets/_admin_panel/css/menukit.css',
        'resources/_assets/_admin_panel/css/style.css',
        'resources/_assets/_admin_panel/css/media.css',
    ], 'public/_assets/_admin_panel/css/dashboard.css')
    .scripts([
        'resources/_assets/_admin_panel/js/bootstrap4/jquery.min.js',
        'resources/_assets/_admin_panel/js/bootstrap4/popper.min.js',
        'resources/_assets/_admin_panel/js/bootstrap4/js/bootstrap.js',
        'resources/_assets/_admin_panel/js/offcanvas.js',
        'resources/_assets/_admin_panel/js/toggle/bootstrap-toggle.min.js',
        'resources/_assets/_admin_panel/js/tagify/tagify.min.js',
        'resources/_assets/_admin_panel/js/fontawesome/all.js',
    ], 'public/_assets/_admin_panel/js/dashboard.js')
    .copyDirectory('resources/_assets/_admin_panel/img', 'public/_assets/_admin_panel/img')


    /*
    |--------------------------------------------------------------------------
    | Guest Assets
    |--------------------------------------------------------------------------
    */
    .styles([
        'resources/_assets/_guest/css/bootstrap.min.css',
        'resources/_assets/_guest/css/menu-kit.css',
        'resources/_assets/_guest/css/style.css',
        'resources/_assets/_guest/css/media.css'
    ], 'public/_assets/_guest/css/main.css')
    .scripts([
        'resources/_assets/_guest/js/jquery/jquery.min.js',
        'resources/_assets/_guest/js/bootstrap5/popper.min.js',
        'resources/_assets/_guest/js/bootstrap5/bootstrap.min.js',
        'resources/_assets/_guest/js/off-canvas/off-canvas.js',
        'resources/_assets/_guest/js/script.js'
    ], 'public/_assets/_guest/js/main.js')
    .copyDirectory('resources/_assets/_guest/img', 'public/_assets/_guest/img')
    .copyDirectory('resources/_assets/_guest/video', 'public/_assets/_guest/video')

    /*
    |--------------------------------------------------------------------------
    | Client Assets
    |--------------------------------------------------------------------------
    */
    .styles([
        'resources/_assets/_client/css/bootstrap.min.css',
        'resources/_assets/_client/css/menukit.css',
        'resources/_assets/_client/css/style.css',
        'resources/_assets/_client/css/media.css'
    ], 'public/_assets/_client/css/main.css')
    .scripts([
        'resources/_assets/_client/js/jquery.min.js',
        'resources/_assets/_client/js/popper.min.js',
        'resources/_assets/_client/js/bootstrap.min.js',
        'resources/_assets/_client/js/offcanvas.js',
        'resources/_assets/_client/js/script.js'
    ], 'public/_assets/_client/js/main.js')
    .copyDirectory('resources/_assets/_client/images', 'public/_assets/_client/images')

    /*
    |--------------------------------------------------------------------------
    | Plugins
    |--------------------------------------------------------------------------
    */

    // Flatpickr
    .styles([
        'node_modules/flatpickr/dist/flatpickr.css'
    ], 'public/_assets/plugins/flatpickr/flatpickr.css')
    .scripts([
        'node_modules/flatpickr/dist/flatpickr.js'
    ], 'public/_assets/plugins/flatpickr/flatpickr.js')

    // Counter
    .scripts([
        'resources/_assets/plugins/counter/js/count.js'
    ], 'public/_assets/plugins/counter/js/count.js')

    // FancyBox
    .styles([
        'resources/_assets/plugins/fancybox/css/jquery.fancybox.min.css',
    ], 'public/_assets/plugins/fancybox/css/fancybox.css')
    .scripts([
        'resources/_assets/plugins/fancybox/js/jquery.fancybox.min.js'
    ], 'public/_assets/plugins/fancybox/js/fancybox.js')

    // Slick
    .styles([
        'resources/_assets/plugins/slick/css/slick.css',
        'resources/_assets/plugins/slick/css/slick-theme.css'
    ], 'public/_assets/plugins/slick/css/slick.css')
    .copyDirectory('resources/_assets/plugins/slick/img', 'public/_assets/plugins/slick/img')
    .scripts([
        'resources/_assets/plugins/slick/js/slick.min.js',
        'resources/_assets/plugins/slick/js/slick-init.js'
    ], 'public/_assets/plugins/slick/js/slick.js')

    // Owl Carousel
    .styles([
        'resources/_assets/plugins/owl-carousel/css/owl.carousel.min.css'
    ], 'public/_assets/plugins/owl-carousel/css/owl-carousel.css')
    .scripts([
        'resources/_assets/plugins/owl-carousel/js/owl.carousel.min.js'
    ], 'public/_assets/plugins/owl-carousel/js/owl-carousel.js')

    // Dropzone
    .styles([
        'resources/_assets/plugins/dropzone/css/dropzone.css',
        'resources/_assets/plugins/dropzone/css/custom.css'
    ], 'public/_assets/plugins/dropzone/css/dropzone.css')
    .scripts([
        'resources/_assets/plugins/dropzone/js/dropzone-amd-module.js'
    ], 'public/_assets/plugins/dropzone/js/dropzone.js')

    // Select2
    .styles([
        'resources/_assets/plugins/select2/css/select2.min.css',
        'resources/_assets/plugins/select2/css/select2-bootstrap4.css',
        'resources/_assets/plugins/select2/css/custom.css'
    ], 'public/_assets/plugins/select2/css/select2.css')
    .scripts([
        'resources/_assets/plugins/select2/js/select2.full.js'
    ], 'public/_assets/plugins/select2/js/select2.js')

    // jQuery Modal
    .styles([
        'resources/_assets/plugins/jquery-modal/css/jquery.modal.css',
        'resources/_assets/plugins/jquery-modal/css/custom.css'
    ], 'public/_assets/plugins/jquery-modal/css/jquery-modal.css')
    .scripts([
        'resources/_assets/plugins/jquery-modal/js/jquery.modal.js',
        'resources/_assets/plugins/jquery-modal/js/custom.js'
    ], 'public/_assets/plugins/jquery-modal/js/jquery-modal.js')

    // Flatpickr
    .styles([
        'node_modules/flatpickr/dist/flatpickr.css'
    ], 'public/_assets/plugins/flatpickr/css/flatpickr.css')
    .scripts([
        'node_modules/flatpickr/dist/flatpickr.js'
    ], 'public/_assets/plugins/flatpickr/js/flatpickr.js')

    //Select2 JS
    .scripts([
        'resources/_assets/_client/js/select2.min.js'
    ], 'public/_assets/_client/js/select2.min.js')

    //Setting JS
    .scripts([
        'resources/_assets/_client/js/setting.js'
    ], 'public/_assets/_client/js/setting.js')
    
    //Show Item JS
    .styles([
        'resources/_assets/_client/css/show.item.css'
    ], 'public/_assets/_client/css/show.item.css')
    .scripts([
        'resources/_assets/_client/js/show.item.js'
    ], 'public/_assets/_client/js/show.item.js')

    //Star rating JS
    .styles([
        'resources/_assets/_client/css/star-rating.css'
    ], 'public/_assets/_client/css/star-rating.css')
    .scripts([
        'resources/_assets/_client/js/star-rating.js'
    ], 'public/_assets/_client/js/star-rating.js')

    //Table JS
    .scripts([
        'resources/_assets/_client/js/table.js'
    ], 'public/_assets/_client/js/table.js')


/*****
 * Will be versified if production mode detected
 */
if (mix.inProduction()) {
    mix.version();
}

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

// Default for both Admin and User
mix.js('resources/js/app.js', 'public/js/app.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        //
    ])
    /*
    |--------------------------------------------------------------------------
    | Admin Panel Assets
    |--------------------------------------------------------------------------
    */
    /*****
     * Site CSS
     */
    .styles([
        'resources/_admin_panel/fonts/fonts.css',
        'resources/_admin_panel/css/bootstrap4/css/bootstrap.min.css',
        'resources/_admin_panel/css/menukit.css',
        'resources/_admin_panel/css/toaster/toastr.min.css',
        'resources/_admin_panel/css/fontawesome/font-awesome.min.css',
        'resources/_admin_panel/css/toggle/bootstrap-toggle.min.css',
        'resources/_admin_panel/css/tagify/tagify.css',
        'resources/_admin_panel/css/menukit.css',
        'resources/_admin_panel/css/select2/select2.min.css',
        'resources/_admin_panel/css/style.css',
        'resources/_admin_panel/css/media.css',
    ], 'public/_admin_panel/css/dashboard.css')
    /*****
     * Site JS
     */
    .scripts([
        'resources/_admin_panel/js/bootstrap4/jquery.min.js',
        'resources/_admin_panel/js/bootstrap4/popper.min.js',
        'resources/_admin_panel/js/bootstrap4/js/bootstrap.js',
        'resources/_admin_panel/js/offcanvas.js',
        'resources/_admin_panel/js/toggle/bootstrap-toggle.min.js',
        'resources/_admin_panel/js/tagify/tagify.min.js',
        'resources/_admin_panel/js/fontawesome/all.js',
        'resources/_admin_panel/js/select2/select2.min.js',
    ], 'public/_admin_panel/js/dashboard.js')
    .copyDirectory('resources/_admin_panel/img', 'public/_admin_panel/img');

    /*
    |--------------------------------------------------------------------------
    | User Panel Assets
    |--------------------------------------------------------------------------
    */
mix.styles([
    'resources/_user_panel/fonts/fonts.css',
    'resources/_user_panel/css/v5/bootstrap.min.css',
    'resources/_user_panel/css/filepond/filepond.min.css',
    'resources/_user_panel/css/filepond/filepond-plugin-image-preview.min.css',
    'resources/_user_panel/css/menukit.css',
    'resources/_user_panel/css/owl.carousel.min.css',
    'resources/_user_panel/css/loader2.css',
    'resources/_user_panel/css/style.css',
    'resources/_user_panel/css/media.css',
    'node_modules/node-snackbar/dist/snackbar.css'
], 'public/_user_panel/css/user_panel.css')
    .scripts([
        'resources/_user_panel/js/bootstrap5/jquery.min.js',
        'resources/_user_panel/js/bootstrap5/popper.min.js',
        'resources/_user_panel/js/bootstrap5/bootstrap.min.js',
        'resources/_user_panel/js/count.js',
        'resources/_user_panel/js/owl.carousel.min.js',
        'resources/_user_panel/js/offcanvas.js',
        'resources/_user_panel/js/loader.js',
        'node_modules/node-snackbar/dist/snackbar.js',

        // Filepond
        'resources/_user_panel/filepond/js/filepond-plugin-file-encode.min.js',
        'resources/_user_panel/filepond/js/filepond-plugin-file-validate-size.min.js',
        'resources/_user_panel/filepond/js/filepond-plugin-image-exif-orientation.min.js',
        'resources/_user_panel/filepond/js/filepond-plugin-image-preview.min.js',
        'resources/_user_panel/filepond/js/filepond.min.js',
        'resources/_user_panel/js/script.js',

    ], 'public/_user_panel/js/user_panel.js')
    .copyDirectory('resources/_user_panel/img', 'public/_user_panel/img')
    .copyDirectory('resources/_user_panel/video', 'public/_user_panel/video');


/*****
 * Will be versified if production mode detected
 */
if (mix.inProduction()) {
    mix.version();
}

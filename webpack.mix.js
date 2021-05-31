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
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    // Application Default Custom
    .styles([
        'resources/_assets/_custom/css/custom_styles.css',
    ], 'public/_assets/_custom/css/custom_styles.css')
    .scripts([
        'resources/_assets/_custom/js/custom_scripts.js'
    ],'public/_assets/_custom/js/custom_scripts.js')

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Assets
    |--------------------------------------------------------------------------
    */
    /*****
     * Site CSS
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
        'resources/_assets/_admin_panel/css/select2/select2.min.css',
        'resources/_assets/_admin_panel/css/style.css',
        'resources/_assets/_admin_panel/css/media.css',
    ], 'public/_assets/_admin_panel/css/dashboard.css')

    /*****
     * Site JS
     */
    .scripts([
        'resources/_assets/_admin_panel/js/bootstrap4/jquery.min.js',
        'resources/_assets/_admin_panel/js/bootstrap4/popper.min.js',
        'resources/_assets/_admin_panel/js/bootstrap4/js/bootstrap.js',
        'resources/_assets/_admin_panel/js/offcanvas.js',
        'resources/_assets/_admin_panel/js/toggle/bootstrap-toggle.min.js',
        'resources/_assets/_admin_panel/js/tagify/tagify.min.js',
        'resources/_assets/_admin_panel/js/fontawesome/all.js',
        'resources/_assets/_admin_panel/js/select2/select2.min.js',
    ], 'public/_assets/_admin_panel/js/dashboard.js')
    .copyDirectory('resources/_assets/_admin_panel/img', 'public/_assets/_admin_panel/img')

    /*
    * Plugins CSS
    * */
    // .styles([
    //     'resources/_assets/_admin_panel/css/tagify/tagify.css',
    //     'resources/_assets/_admin_panel/css/select2/select2.min.css',
    // ], 'public/_assets/_plugins/css/plugins.css')

    /*
    * Plugins JS
    * */
    // .scripts([
    //     'resources/_assets/_admin_panel/js/bootstrap4/jquery.min.js',
    //     'resources/_assets/_admin_panel/js/tagify/tagify.min.js',
    //     'resources/_assets/_admin_panel/js/select2/select2.min.js',
    // ], 'public/_assets/_plugins/js/plugins.js');

/*
|--------------------------------------------------------------------------
| Guest Assets
|--------------------------------------------------------------------------
*/
mix.styles([
    'resources/_assets/_guest/fonts/fonts.css',
    'resources/_assets/_guest/css/v5/bootstrap.min.css',
    'resources/_assets/_guest/css/filepond/filepond.min.css',
    'resources/_assets/_guest/css/filepond/filepond-plugin-image-preview.min.css',
    'resources/_assets/_guest/css/menukit.css',
    'resources/_assets/_guest/css/owl.carousel.min.css',
    'resources/_assets/_guest/css/loader2.css',
    'resources/_assets/_guest/css/style.css',
    'resources/_assets/_guest/css/media.css',
    'node_modules/node-snackbar/dist/snackbar.css',
], 'public/_assets/_guest/css/guest.css')
    .scripts([
        'resources/_assets/_guest/js/bootstrap5/jquery.min.js',
        'resources/_assets/_guest/js/bootstrap5/popper.min.js',
        'resources/_assets/_guest/js/bootstrap5/bootstrap.min.js',
        'resources/_assets/_guest/js/count.js',
        'resources/_assets/_guest/js/owl.carousel.min.js',
        'resources/_assets/_guest/js/offcanvas.js',
        'resources/_assets/_guest/js/loader.js',
        'node_modules/node-snackbar/dist/snackbar.js',

        // Filepond
        'resources/_assets/_guest/filepond/js/filepond-plugin-file-encode.min.js',
        'resources/_assets/_guest/filepond/js/filepond-plugin-file-validate-size.min.js',
        'resources/_assets/_guest/filepond/js/filepond-plugin-image-exif-orientation.min.js',
        'resources/_assets/_guest/filepond/js/filepond-plugin-image-preview.min.js',
        'resources/_assets/_guest/filepond/js/filepond.min.js',
        'resources/_assets/_guest/js/script.js',

    ], 'public/_assets/_guest/js/guest.js')
    .copyDirectory('resources/_assets/_guest/img', 'public/_assets/_guest/img')
    .copyDirectory('resources/_assets/_guest/video', 'public/_assets/_guest/video');


/*****
 * Will be versified if production mode detected
 */
if (mix.inProduction()) {
    mix.version();
}

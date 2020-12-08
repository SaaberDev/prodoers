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

mix.js('resources/js/app.js', 'public/js/app.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        //
    ])
    /*****
     * Site CSS
     */
    .styles([
        'resources/site_assets/css/bootstrap4/css/bootstrap.min.css',
        'resources/site_assets/css/menukit.css',
        'resources/site_assets/css/toaster/toastr.min.css',
        'resources/site_assets/css/fontawesome/font-awesome.min.css',
        'resources/site_assets/css/toggle/bootstrap-toggle.min.css',
        'resources/site_assets/css/tagify/tagify.css',
        'resources/site_assets/css/menukit.css',
        'resources/site_assets/css/select2/select2.min.css',
        'resources/site_assets/css/style.css',
        'resources/site_assets/css/media.css',
    ], 'public/css/dashboard.css')
    /*****
     * Site JS
     */
    .scripts([
        'resources/site_assets/js/bootstrap4/jquery.min.js',
        'resources/site_assets/js/bootstrap4/popper.min.js',
        'resources/site_assets/js/bootstrap4/js/bootstrap.js',
        'resources/site_assets/js/offcanvas.js',
        'resources/site_assets/js/toggle/bootstrap-toggle.min.js',
        'resources/site_assets/js/tagify/tagify.min.js',
        'resources/site_assets/js/fontawesome/all.js',
        'resources/site_assets/js/select2/select2.min.js',
    ], 'public/js/dashboard.js')
    .copyDirectory('resources/site_assets/img', 'public/img');

/*****
 * Will be versified if production mode detected
 */
if (mix.inProduction()) {
    mix.version();
}

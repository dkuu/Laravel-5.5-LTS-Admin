const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
let version = {
    'AdminLte': "AdminLTE-2.4.0-rc"
}


mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');



/*
// font-awesome
mix.sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/static/font-awesome/css')
    .copy('node_modules/font-awesome/fonts', 'public/static/font-awesome/fonts');

// Ionicons
mix.sass('node_modules/ionicons/dist/scss/ionicons.scss', 'public/static/ionicons/css')
    .copy('node_modules/ionicons/dist/fonts', 'public/static/ionicons/fonts');
*/
// AdminLTE
mix.copy('node_modules/admin-lte/dist', 'public/static/AdminLTE/dist')
    .copy('node_modules/admin-lte/plugins', 'public/static/AdminLTE/plugins');




/*
mix.js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'BoxRefresh.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'BoxWidget.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'ControlSidebar.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'DirectChat.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'Layout.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'PushMenu.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'TodoList.js', 'public/js/AdminLTE')
    .js(assetsPath.base + 'js/' + assetsPath.AdminLte + 'Tree.js', 'public/js/AdminLTE')
    .sass(assetsPath.base + 'sass/' + assetsPath.AdminLte + '_variables.scss', 'public/css/AdminLTE')
    .sass(assetsPath.base + 'sass/' + assetsPath.AdminLte + '_header.scss', 'public/css/AdminLTE')
    .sass(assetsPath.base + 'sass/' + assetsPath.AdminLte + '_bootstrap_variables.scss', 'public/css/AdminLTE')
    .sass(assetsPath.base + 'sass/' + assetsPath.AdminLte + '_bootstrap_variables_old2.scss', 'public/css/AdminLTE');

 */
let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */


mix.styles([
	'resources/assets/admin/bootstrap/css/bootstrap.min.css',
	'resources/assets/admin/font-awesome/4.5.0/css/font-awesome.min.css',
	'resources/assets/admin/ionicons/2.0.1/css/ionicons.min.css',
	'resources/assets/admin/plugins/iCheck/minimal/_all.css',
	'resources/assets/admin/plugins/datepicker/datepicker3.css',
	'resources/assets/admin/plugins/select2/select2.min.css',
	'resources/assets/admin/plugins/datatables/dataTables.bootstrap.css',
	'resources/assets/admin/dist/css/AdminLTE.min.css',
	'resources/assets/admin/dist/css/skins/_all-skins.min.css',
    'resources/assets/admin/dist/css/style.css'
], 'public/css/admin.css');



mix.scripts([
	'resources/assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
	'resources/assets/admin/bootstrap/js/bootstrap.min.js',
	'resources/assets/admin/plugins/select2/select2.full.min.js',
	'resources/assets/admin/plugins/datepicker/bootstrap-datepicker.js',
	'resources/assets/admin/plugins/datatables/jquery.dataTables.min.js',
	'resources/assets/admin/plugins/datatables/dataTables.bootstrap.min.js',
	'resources/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
	'resources/assets/admin/plugins/fastclick/fastclick.js',
	'resources/assets/admin/plugins/iCheck/icheck.min.js',
	'resources/assets/admin/dist/js/app.min.js',
	'resources/assets/admin/dist/js/demo.js',
	'resources/assets/admin/dist/js/script.js'
], 'public/js/admin.js');

// front-end scripts and styles
mix.styles([
    'resources/assets/pages/css/jquery.mCustomScrollbar.css',
    'resources/assets/pages/css/slick.css',
    'resources/assets/pages/css/responsive_menu.css',
    // 'resources/assets/pages/css/style.less',
    'resources/assets/pages/css/style.css',
], 'public/css/pages.css');


mix.scripts([
    'resources/assets/pages/js/jquery-3.2.1.min.js',
    'resources/assets/pages/bootstrap/js/bootstrap.min.js',
    'resources/assets/pages/js/MouseWheel.js',
    'resources/assets/pages/js/jquery.mCustomScrollbar.concat.min.js',
    'resources/assets/pages/js/slick.min.js',
    'resources/assets/pages/js/responsive_menu.js',
    'resources/assets/pages/js/jTruncate.js',
    'resources/assets/pages/js/main.js'
], 'public/js/pages.js');


mix.copy('resources/assets/admin/bootstrap/fonts', 'public/fonts');
mix.copy('resources/assets/admin/dist/fonts', 'public/fonts');
mix.copy('resources/assets/admin/dist/img', 'public/img');
mix.copy('resources/assets/pages/fonts', 'public/fonts');


// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });

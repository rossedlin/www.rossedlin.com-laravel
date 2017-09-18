let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([

        //CSS Global Compulsory
        'public/theme/unify/assets/vendor/bootstrap/bootstrap.min.css',
        'public/theme/unify/assets/vendor/icon-awesome/css/font-awesome.min.css',
        // 'public/theme/unify/assets/vendor/icon-line-pro/style.css',

        //CSS Implementing Plugins
        // 'public/theme/unify/assets/vendor/icon-awesome/css/font-awesome.min.css',
        'public/theme/unify/assets/vendor/icon-hs/style.css',
        'public/theme/unify/assets/vendor/hamburgers/hamburgers.css',
        'public/theme/unify/assets/vendor/dzsparallaxer/dzsparallaxer.css',
        'public/theme/unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.css',
        'public/theme/unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.css',
        'public/theme/unify/assets/vendor/slick-carousel/slick/slick.css',
        'public/theme/unify/assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.css',
        'public/theme/unify/assets/vendor/fancybox/jquery.fancybox.css',

        //CSS Template
        'public/theme/unify-consulting/css/styles.op-consulting.css',

        //Revolution Slider
        'public/theme/unify/assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'public/theme/unify/assets/vendor/revolution-slider/revolution/css/settings.css',
        'public/theme/unify/assets/vendor/revolution-slider/revolution/css/layers.css',
        'public/theme/unify/assets/vendor/revolution-slider/revolution/css/navigation.css',
        'public/theme/unify/assets/vendor/revolution-slider/revolution-addons/typewriter/css/typewriter.css',

        //CSS Customization
        'public/theme/unify-consulting/css/custom.css',
    ], 'public/css/style.css');
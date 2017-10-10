/**
 * CSS files to inject in order
 *
 * If you're using LESS with the built-in default config, you'll want
 * to change `assets/styles/importer.less` instead.
 */
var coreCssFilesToInject = [
    'css/core.css',
    'vendor/bootstrap/bootstrap.css',
    'css/theme.css'
];

var themeCssFilesToInject = [

];


/**
 * Client-side javascript files to inject in order
 * Uses Grunt-style wildcard/glob/splat expressions
 */
var coreJsFilesToInject = [

    // Load jQuery before Bootstrap and other libraries
    'vendor/jquery/jquery.js',
    'vendor/jquery-migrate/jquery-migrate.js',
    'vendor/jquery.easing/js/jquery.easing.js',
    'vendor/tether.js',

    // Bootstrp
    'vendor/bootstrap/bootstrap.js',

    // Vendor - Page
    'vendor/appear.js',
    'vendor/slick-carousel/slick/slick.js',
    'vendor/fancybox/jquery.fancybox.js',
    'vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.js',
    'vendor/dzsparallaxer/dzsparallaxer.js',
    'vendor/dzsparallaxer/dzsscroller/scroller.js',
    'vendor/dzsparallaxer/advancedscroller/plugin.js',

    /**
     * Theme
     */
    'js/hs.core.js',
    'js/helpers/hs.hamburgers.js',
    'js/components/*.js',
    'js/components/*/*.js',

    // Vendor - Revolution Slider
    'vendor/revolution-slider/revolution/js/jquery.themepunch.tools.js',
    'vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.js',
    'vendor/revolution-slider/revolution-addons/typewriter/js/revolution.addon.typewriter.js',

    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.js',
    'vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.js',

    // Load Light Gallery
    // 'vendor/lightgallery/js/lightgallery.js',
    // 'vendor/lg-thumbnail/lg-thumbnail.js',
    // 'vendor/lg-fullscreen/lg-fullscreen.js',
];


// Default path for public folder (see documentation for more information)

// Prefix relative paths to source files so they point to the proper locations
// (i.e. where the other Grunt tasks spit them out, or in some cases, where
// they reside in the first place)
module.exports.coreCssFilesToInject = coreCssFilesToInject.map(function (cssPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (cssPath[0] === '!') {
        return require('path').join('!.tmp/assets/', cssPath.substr(1));
    }
    return require('path').join('.tmp/assets/', cssPath);
});

module.exports.themeCssFilesToInject = themeCssFilesToInject.map(function (cssPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (cssPath[0] === '!') {
        return require('path').join('!.tmp/assets/', cssPath.substr(1));
    }
    return require('path').join('.tmp/assets/', cssPath);
});

module.exports.coreJsFilesToInject = coreJsFilesToInject.map(function (jsPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (jsPath[0] === '!') {
        return require('path').join('!.tmp/assets/', jsPath.substr(1));
    }
    return require('path').join('.tmp/assets/', jsPath);
});
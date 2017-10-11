/**
 * CSS files to inject in order
 */
var coreCssFilesToInject = [
    'css/core.css',
    
    // CSS Global Compulsory
    'vendor/bootstrap/bootstrap.css',
    // 'vendor/icon-line-pro/style.css',

    // CSS Implementing Plugins
    // '/vendor/icon-awesome/css/font-awesome.css',
    '/vendor/icon-hs/style.css',
    '/vendor/hamburgers/hamburgers.css',
    '/vendor/dzsparallaxer/dzsparallaxer.css',
    '/vendor/dzsparallaxer/dzsscroller/scroller.css',
    '/vendor/dzsparallaxer/advancedscroller/plugin.css',
    '/vendor/slick-carousel/slick/slick.css',
    '/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.css',
    '/vendor/fancybox/jquery.fancybox.css',

    // Revolution Slider
    '/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
    '/vendor/revolution-slider/revolution/css/settings.css',
    '/vendor/revolution-slider/revolution/css/layers.css',
    '/vendor/revolution-slider/revolution/css/navigation.css',
    '/vendor/revolution-slider/revolution-addons/typewriter/css/typewriter.css',

    // Theme
    'css/theme.css'
];

var themeCssFilesToInject = [];


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
    //'vendor/appear.js',
    //'vendor/slick-carousel/slick/slick.js',
    //'vendor/fancybox/jquery.fancybox.js',
    //'vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.js',
    //'vendor/dzsparallaxer/dzsparallaxer.js',
    //'vendor/dzsparallaxer/dzsscroller/scroller.js',
    //'vendor/dzsparallaxer/advancedscroller/plugin.js',

    // Load Light Gallery
    // 'vendor/lightgallery/js/lightgallery.js',
    // 'vendor/lg-thumbnail/lg-thumbnail.js',
    // 'vendor/lg-fullscreen/lg-fullscreen.js',
];

var themeJsFilesToInject = [
    'js/hs.core.js',
    'js/helpers/hs.hamburgers.js',
    'js/components/*.js',
    'js/components/*/*.js',
];

var revolutionSliderJsFilesToInject = [
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

/**
 * JavaScript
 */

module.exports.coreJsFilesToInject = coreJsFilesToInject.map(function (jsPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (jsPath[0] === '!') {
        return require('path').join('!.tmp/assets/', jsPath.substr(1));
    }
    return require('path').join('.tmp/assets/', jsPath);
});

module.exports.themeJsFilesToInject = themeJsFilesToInject.map(function (jsPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (jsPath[0] === '!') {
        return require('path').join('!.tmp/assets/', jsPath.substr(1));
    }
    return require('path').join('.tmp/assets/', jsPath);
});
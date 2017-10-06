/**
 * CSS files to inject in order
 *
 * If you're using LESS with the built-in default config, you'll want
 * to change `assets/styles/importer.less` instead.
 */
var headCssFilesToInject = [
    // 'css/importer.css',
    'css/bootstrap.css',
    'vendor/lightgallery/css/lightgallery.css',

    /**
     * Theme
     */
    // 'css/unify.css',
    'css/unify-consulting.css',
];


/**
 * Client-side javascript files to inject in order
 * Uses Grunt-style wildcard/glob/splat expressions
 */
var headJsFilesToInject = [

    // Load jQuery before Bootstrap and other libraries
    'js/jquery.js',
    'js/bootstrap.js',

    // Load Light Gallery
    'vendor/lightgallery/js/lightgallery.js',
    'vendor/lg-thumbnail/lg-thumbnail.js',
    'vendor/lg-fullscreen/lg-fullscreen.js',

    /**
     * Theme
     */
    'js/hs.core.js',
    'js/components/*.js',
    'js/components/*/*.js',
];


// Default path for public folder (see documentation for more information)

// Prefix relative paths to source files so they point to the proper locations
// (i.e. where the other Grunt tasks spit them out, or in some cases, where
// they reside in the first place)
module.exports.headCssFilesToInject = headCssFilesToInject.map(function (cssPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (cssPath[0] === '!') {
        return require('path').join('!.tmp/public/', cssPath.substr(1));
    }
    return require('path').join('.tmp/public/', cssPath);
});
module.exports.headJsFilesToInject = headJsFilesToInject.map(function (jsPath) {
    // If we're ignoring the file, make sure the ! is at the beginning of the path
    if (jsPath[0] === '!') {
        return require('path').join('!.tmp/public/', jsPath.substr(1));
    }
    return require('path').join('.tmp/public/', jsPath);
});
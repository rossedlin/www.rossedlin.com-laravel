/**
 * `concat`
 *
 * ---------------------------------------------------------------
 *
 * Concatenates the contents of multiple JavaScript and/or CSS files
 * into two new files, each located at `concat/production.js` and
 * `concat/production.css` respectively in `public/concat`.
 *
 * This is used as an intermediate step to generate monolithic files
 * that can then be passed in to `uglify` and/or `cssmin` for minification.
 *
 * For usage docs see:
 *   https://github.com/gruntjs/grunt-contrib-concat
 *
 */
module.exports = function(grunt) {

  grunt.config.set('concat', {
    headJs: {
      src: require('../pipeline').coreJsFilesToInject,
      dest: '.tmp/public/js/core.js'
    },
    coreCss: {
      src: require('../pipeline').coreCssFilesToInject,
      dest: '.tmp/public/css/core.css'
    },
    themeCss: {
      src: require('../pipeline').themeCssFilesToInject,
      dest: '.tmp/public/css/theme.css'
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
};

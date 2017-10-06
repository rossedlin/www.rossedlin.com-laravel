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
      src: require('../pipeline').headJsFilesToInject,
      dest: 'public/head.js'
    },
    headCss: {
      src: require('../pipeline').headCssFilesToInject,
      dest: 'public/head.css'
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
};

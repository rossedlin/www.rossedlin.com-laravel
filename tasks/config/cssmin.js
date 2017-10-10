/**
 * Compress CSS files.
 *
 * ---------------------------------------------------------------
 *
 * For usage docs see:
 *   https://github.com/gruntjs/grunt-contrib-cssmin
 *
 */
module.exports = function(grunt) {

  grunt.config.set('cssmin', {
    core: {
      src: '.tmp/public/css/core.css',
      dest: '.tmp/public/css/core.min.css'
    }
  });

  grunt.loadNpmTasks('grunt-contrib-cssmin');
};

/**
 * `clean`
 *
 * ---------------------------------------------------------------
 *
 * For usage docs see:
 *   https://github.com/gruntjs/grunt-contrib-clean
 *
 */
module.exports = function (grunt) {

    grunt.config.set('clean', {
        tmp: ['.tmp/public/**'],
        prePublic: [
            '.tmp/public/js/**',
            '.tmp/public/sass/**',
            '.tmp/public/vendor/**',
        ],
        public: ['public/**']
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
};

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

        /**
         * Assets
         */
        tmpAssets: ['.tmp/assets/**'],

        /**
         * Assets
         */
        tmpSass: ['.tmp/sass/**'],

        /**
         * Tmp
         */
        tmpPublic: ['.tmp/public/**'],

        /**
         * Public
         */
        public: ['public/**']
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
};

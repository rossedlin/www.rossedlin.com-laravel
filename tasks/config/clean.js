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

        /**
         * Public
         */
        public: ['public/**'],
        postPublic: [

            /**
             * Css
             */
            'public/css/**',

            /**
             * JavaScript
             */
            'public/js/**',

            /**
             *
             */
            'public/sass/**',
            'public/vendor/**',
        ]
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
};

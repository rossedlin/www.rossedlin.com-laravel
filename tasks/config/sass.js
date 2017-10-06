module.exports = function (grunt) {

    grunt.config.set('sass', {

        /**
         * Temp Public
         */
        tmp: {
            files: {
                '.tmp/public/css/head.css': '.tmp/public/sass/head.scss'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
};

module.exports = function (grunt) {

    grunt.config.set('sass', {

        /**
         * Assets
         */
        assets: {
            files: {
                '.tmp/sass/head.css': 'resources/assets/sass/head.scss'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
};

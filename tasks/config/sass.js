module.exports = function (grunt) {

    grunt.config.set('sass', {

        /**
         * Assets
         */
        assets: {
            files: {
                '.tmp/sass/core.css': 'resources/assets/sass/core.scss',
                '.tmp/sass/theme.css': 'resources/assets/sass/theme.scss'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
};

module.exports = function (grunt) {
    grunt.registerTask('build', [
        'copy:tmp',
        'copy:jquery',
        'copy:bootstrap',
        'copy:lightgallery',
        
        'sass:assets',

        /**
         * Default
         */
        'default',
    ]);
};

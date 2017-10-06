module.exports = function (grunt) {
    grunt.registerTask('default', [
        'clean:tmp',
        'clean:public',

        'copy:assets',
        'copy:jquery',
        'copy:bootstrap',
        'copy:lightgallery',
        // 'string-replace:lightgallery',

        'sass:tmp',
        // 'less:dev',
        
        // 'concat',

        'clean:public',
        // 'clean:prePublic',
        'copy:public'
    ]);
};

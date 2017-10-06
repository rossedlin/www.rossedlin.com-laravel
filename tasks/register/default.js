module.exports = function (grunt) {
    grunt.registerTask('default', [
        'clean:tmp',
        'clean:public',

        'copy:assets',

        // 'string-replace:lightgallery',

        'concat',

        'clean:public',
        'copy:public',
    ]);
};

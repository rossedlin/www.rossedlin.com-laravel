module.exports = function (grunt) {
    grunt.registerTask('default', [
        // 'string-replace:lightgallery',

        'concat',

        'clean:public',
        'copy:public',
    ]);
};

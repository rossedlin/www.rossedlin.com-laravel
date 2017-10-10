module.exports = function (grunt) {
    grunt.registerTask('local', [
        'build',
        'copy:localEnv'
    ]);
};
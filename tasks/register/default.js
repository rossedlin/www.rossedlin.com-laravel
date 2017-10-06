module.exports = function (grunt) {
  grunt.registerTask('default', [
    'clean:dev',

    'copy:assets',
    'copy:jquery',
    'copy:bootstrap',
    'copy:lightgallery',

    // 'less:dev',

    // 'concat'
    // 'coffee:dev',
  ]);
};

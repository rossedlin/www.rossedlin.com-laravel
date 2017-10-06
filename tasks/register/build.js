module.exports = function (grunt) {
    grunt.registerTask('build', [

        /**
         * Clean
         */
        'clean:tmpAssets',
        'clean:tmpPublic',
        'clean:public',

        /**
         * Build Assets
         */
        'copy:tmpSassToTmpAssets',
        'copy:jqueryToTmpAssets',
        'copy:bootstrapToTmpAssets',
        'copy:lightgalleryToTmpAssets',
        
        /**
         * Build Public
         */
        'copy:assetsToPublic',
        'concat',

        /**
         * Publish
         */
        'copy:public',
    ]);
};

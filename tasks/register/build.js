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
        'copy:assetsToTmpAssets',
        'copy:tmpSassToTmpAssets',
        'copy:jqueryToTmpAssets',
        'copy:bootstrapToTmpAssets',
        'copy:popperToTmpAssets',
        'copy:lightgalleryToTmpAssets',
        
        /**
         * Build Public
         */
        'copy:assetsToTmpPublic',
        'concat',

        /**
         * Publish
         */
        'copy:public'
    ]);
};

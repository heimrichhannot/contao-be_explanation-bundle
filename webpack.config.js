var Encore = require('@symfony/webpack-encore');

Encore
.setOutputPath('src/Resources/public/assets')
.addEntry('contao-be-explanation-bundle', './src/Resources/assets/js/contao-be_explanation-bundle.js')
.setPublicPath('/bundles/heimrichhannotcontaobeexplanation/assets')
.setManifestKeyPrefix('bundles/heimrichhannotcontaobeexplanation/assets')
.disableSingleRuntimeChunk()
.enableSassLoader()
.enablePostCssLoader()
.cleanupOutputBeforeBuild()
.enableSourceMaps(!Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();
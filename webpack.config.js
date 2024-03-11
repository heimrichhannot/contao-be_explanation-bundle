var Encore = require('@symfony/webpack-encore');

Encore
.setOutputPath('public/assets')
.addEntry('contao-be-explanation-bundle', './assets/js/contao-be_explanation-bundle.js')
.setPublicPath('/bundles/heimrichhannotcontaobeexplanation/assets')
.setManifestKeyPrefix('bundles/heimrichhannotcontaobeexplanation/assets')
.disableSingleRuntimeChunk()
.enableSassLoader()
.enablePostCssLoader()
.cleanupOutputBeforeBuild()
.enableSourceMaps(!Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();
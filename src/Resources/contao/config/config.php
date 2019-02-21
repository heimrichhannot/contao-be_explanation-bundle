<?php

/**
 * Backend form fields
 */
$GLOBALS['BE_FFL']['explanation'] = \HeimrichHannot\BeExplanationBundle\ExplanationField::class;
$GLOBALS['BE_FFL']['huh_be_explanation'] = \HeimrichHannot\BeExplanationBundle\ExplanationField::class;

/**
 * Assets
 */
if (TL_MODE == 'BE') {
    // css
    $GLOBALS['TL_CSS']['be_explanation'] = 'bundles/heimrichhannotcontaobeexplanation/css/contao-be_explanation-bundle.css|static';

    // js
    $GLOBALS['TL_JAVASCRIPT']['be_explanation'] = 'bundles/heimrichhannotcontaobeexplanation/js/contao-be_explanation-bundle.js|static';
}
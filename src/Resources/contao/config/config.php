<?php

/**
 * Backend form fields
 */
$GLOBALS['BE_FFL']['explanation'] = 'HeimrichHannot\BeExplanationBundle\ExplanationField';

/**
 * Assets
 */
if (TL_MODE == 'BE') {
    // css
    $GLOBALS['TL_CSS']['be_explanation'] = 'system/modules/be_explanation/assets/css/be_explanation.css|static';

    // js
    $GLOBALS['TL_JAVASCRIPT']['be_explanation'] = 'system/modules/be_explanation/assets/js/jquery.be_explanation.js|static';
}
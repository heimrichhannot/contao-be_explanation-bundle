![](https://img.shields.io/packagist/v/heimrichhannot/contao-be_explanation-bundle.svg)
![](https://img.shields.io/packagist/dt/heimrichhannot/contao-be_explanation-bundle.svg)
[![](https://img.shields.io/travis/heimrichhannot/contao-be_explanation-bundle/master.svg)](https://travis-ci.org/heimrichhannot/contao-be_explanation-bundle/)
[![](https://img.shields.io/coveralls/heimrichhannot/contao-be_explanation-bundle/master.svg)](https://coveralls.io/github/heimrichhannot/contao-be_explanation-bundle)

# Backend Explanation Bundle

This bundle offers a simple backend explanation form field (inputType).

## Technical instructions

Just add the field to some of your data container arrays as follows:

```
$GLOBALS['TL_DCA']['tl_*']['fields']['myExplanation'] = array
(
    'inputType' => 'explanation',
    'eval'      => array(
        'text'     => &$GLOBALS['TL_LANG']['tl_*']['myExplanation'], // this is a string, not an array
        'class'    => 'tl_info', // all contao message css classes are possible
        'tl_class' => 'long'
    )
);
```
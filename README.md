![](https://img.shields.io/packagist/v/heimrichhannot/contao-be_explanation-bundle.svg)
![](https://img.shields.io/packagist/dt/heimrichhannot/contao-be_explanation-bundle.svg)
[![Build Status](https://travis-ci.org/heimrichhannot/contao-be_explanation-bundle.svg?branch=master)](https://travis-ci.org/heimrichhannot/contao-be_explanation-bundle)
[![Coverage Status](https://coveralls.io/repos/github/heimrichhannot/contao-be_explanation-bundle/badge.svg?branch=master)](https://coveralls.io/github/heimrichhannot/contao-be_explanation-bundle?branch=master)

# Backend Explanation Bundle

This bundle offers a simple backend explanation form field (inputType).

## Technical instructions

Just add the field to some of your data container arrays as follows:

```php
$GLOBALS['TL_DCA']['tl_table']['fields']['myExplanation'] = [
    'inputType' => 'explanation',
    'eval'      => [
        'text'          => &$GLOBALS['TL_LANG']['tl_table']['explanation']['myExplanation'], // this is a string, not an array
        'text_callback' => [\AppBundle\EventListener\Dca\TableListener::class, 'onTextCallback'], // a callback to dynamical generate text
        'class'         => 'tl_info', // all contao message css classes are possible
        'tl_class'      => 'long',
        'collapsible'   => true // If text is to long, if will be collapsed
    ]
];
```

#### Text Callback

The callback gets the `$attributes` array from the widget constructar as parameter, which containers the widget config and the current DataContainer.

Example: 

```php
public function textCallback(array $attributes): string {
    $dc = $attributes["dataContainer"];
    $text = $attributes["text"];
    return "My new text";
}
```
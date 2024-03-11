![](https://img.shields.io/packagist/v/heimrichhannot/contao-be_explanation-bundle.svg)
![](https://img.shields.io/packagist/dt/heimrichhannot/contao-be_explanation-bundle.svg)

# Backend Explanation Bundle

This bundle offers a simple backend explanation form field (inputType).

## Technical instructions

Just add the field to some of your data container arrays as follows:

```php
use AppBundle\EventListener\Dca\TableListener;

$GLOBALS['TL_DCA']['tl_table']['fields']['myExplanation'] = [
    'inputType' => 'explanation',
    'eval'      => [
        'text'          => &$GLOBALS['TL_LANG']['tl_table']['explanation']['myExplanation'], // this is a string, not an array
        'text_callback' => [TableListener::class, 'onTextCallback'], // a callback to dynamical generate text. Can also be a callable.
        'class'         => 'tl_info', // all contao message css classes are possible
        'tl_class'      => 'w50 long',
        'collapsible'   => true // If text is to long, if will be collapsed
    ]
];
```

#### Text Callback

The callback gets the `$attributes` array from the widget constructor as parameter, which containers the widget config and the current DataContainer.

Example: 

```php
public function textCallback(array $attributes): string {
    $dc = $attributes["dataContainer"];
    $text = $attributes["text"];
    return "My new text";
}
```

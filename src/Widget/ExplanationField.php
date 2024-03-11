<?php

/*
 * Copyright (c) 2020 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\BeExplanationBundle\Widget;

use Contao\System;
use Contao\Widget;

class ExplanationField extends Widget
{
    protected $strTemplate = 'be_explanation';

    protected $collapsible = false;

    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);

        if ($callback = ($attributes['text_callback'] ?? null)) {
            if (\is_callable($callback)) {
                $this->text = $callback($attributes);
            } elseif (\is_array($callback)) {
                $this->text = System::importStatic($callback[0])->{$callback[1]}($attributes);
            }
        }

        if (isset($attributes['collapsible']) && true === $attributes['collapsible']) {
            $this->collapsible = true;
        }
    }

    public function generate()
    {
        return $this->parse();
    }

    /**
     * Parse the template file and return it as string.
     *
     * @param array $arrAttributes An optional attributes array
     *
     * @return string The template markup
     */
    public function parse($arrAttributes = null)
    {
        if ('BE' === TL_MODE) {
            $GLOBALS['TL_CSS']['be_explanation'] = 'bundles/heimrichhannotcontaobeexplanation/assets/contao-be-explanation-bundle.css|static';

            if ($this->collapsible) {
                $GLOBALS['TL_JAVASCRIPT']['be_explanation'] = 'bundles/heimrichhannotcontaobeexplanation/assets/contao-be-explanation-bundle.js|static';
            }
        }

        return parent::parse($arrAttributes);
    }
}

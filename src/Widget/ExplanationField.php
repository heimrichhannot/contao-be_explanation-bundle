<?php

/*
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\BeExplanationBundle;

use Contao\System;
use Contao\Widget;

class ExplanationField extends Widget
{
    protected $strTemplate = 'be_explanation';

    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
        if (isset($attributes['text_callback']) && is_array($callback = $attributes['text_callback'])) {
            $this->text = System::importStatic($callback[0])->{$callback[1]}($attributes);
        }
    }

    public function generate()
    {
        return parent::generate();
    }
}

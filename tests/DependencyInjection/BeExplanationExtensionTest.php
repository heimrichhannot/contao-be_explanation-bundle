<?php

/*
 * Copyright (c) 2020 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\IsotopeBundle\Tests\DependencyInjection;

use Contao\TestCase\ContaoTestCase;
use HeimrichHannot\BeExplanationBundle\DependencyInjection\BeExplanationExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

class BeExplanationExtensionTest extends ContaoTestCase
{
    public function testLoad()
    {
        $container = new ContainerBuilder(new ParameterBag(['kernel.debug' => false]));
        $extension = new BeExplanationExtension();
        $extension->load([], $container);
        $this->addToAssertionCount(1);
    }
}

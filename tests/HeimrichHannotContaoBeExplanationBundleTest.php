<?php

/*
 * Copyright (c) 2020 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\BeExplanationBundle\Tests;

use HeimrichHannot\BeExplanationBundle\DependencyInjection\BeExplanationExtension;
use HeimrichHannot\BeExplanationBundle\HeimrichHannotContaoBeExplanationBundle;
use PHPUnit\Framework\TestCase;

class HeimrichHannotContaoBeExplanationBundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        $bundle = new HeimrichHannotContaoBeExplanationBundle();

        $this->assertInstanceOf(BeExplanationExtension::class, $bundle->getContainerExtension());
    }
}

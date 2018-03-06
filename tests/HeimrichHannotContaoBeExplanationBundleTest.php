<?php

/*
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\BeExplanationBundle\Tests;

use HeimrichHannot\BeExplanationBundle\HeimrichHannotContaoBeExplanationBundle;
use PHPUnit\Framework\TestCase;

class HeimrichHannotContaoBeExplanationBundleTest extends TestCase
{
    /**
     * Tests the object instantiation.
     */
    public function testCanBeInstantiated()
    {
        $bundle = new HeimrichHannotContaoBeExplanationBundle();

        $this->assertInstanceOf(HeimrichHannotContaoBeExplanationBundle::class, $bundle);
    }
}

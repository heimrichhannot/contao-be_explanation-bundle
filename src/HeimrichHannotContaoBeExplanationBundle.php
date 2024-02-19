<?php

/*
 * Copyright (c) 2024 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\BeExplanationBundle;

use HeimrichHannot\BeExplanationBundle\DependencyInjection\BeExplanationExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HeimrichHannotContaoBeExplanationBundle extends Bundle
{
    /**
     * @return BeExplanationExtension
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new BeExplanationExtension();
    }
}
<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\HttpKernel\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Allows to register legacy Contao modules as bundle.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
final class ContaoModuleBundle extends Bundle
{
    /**
     * Sets the module name and application root directory.
     *
     * @param string $name    The module name
     * @param string $rootDir The application root directory
     *
     * @throws \LogicException
     */
    public function __construct($name, $rootDir)
    {
        $this->name = $name;
        $this->path = dirname($rootDir) . '/system/modules/' . $this->name;

        if (!is_dir($this->path)) {
            throw new \LogicException('The module folder "system/modules/' . $this->name . '" does not exist.');
        }
    }
}

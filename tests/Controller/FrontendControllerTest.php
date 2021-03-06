<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Test\Controller;

use Contao\CoreBundle\Controller\FrontendController;
use Contao\CoreBundle\Test\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Tests the FrontendController class.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class FrontendControllerTest extends TestCase
{
    /**
     * Tests the object instantiation.
     */
    public function testInstantiation()
    {
        $controller = new FrontendController();

        $this->assertInstanceOf('Contao\CoreBundle\Controller\FrontendController', $controller);
    }

    /**
     * Tests the controller actions.
     */
    public function testActions()
    {
        $framework = $this
            ->getMockBuilder('Contao\CoreBundle\Framework\ContaoFramework')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        /** @var ContainerBuilder $container */
        $container = $this->mockKernel()->getContainer();
        $container->set('contao.framework', $framework);

        $controller = new FrontendController();
        $controller->setContainer($container);

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $controller->indexAction());
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $controller->cronAction());
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $controller->shareAction());
    }
}

<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Adds the bundle services to the container.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 * @author Yanick Witschi <https://github.com/toflar>
 */
class ContaoCoreExtension extends ConfigurableExtension
{
    /**
     * @var array
     */
    private $files = [
        'cache.yml',
        'commands.yml',
        'listener.yml',
        'services.yml',
    ];

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'contao';
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        // Add the resource to the container
        parent::getConfiguration($config, $container);

        return new Configuration($container->getParameter('kernel.debug'));
    }

    /**
     * {@inheritdoc}
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        foreach ($this->files as $file) {
            $loader->load($file);
        }

        $container->setParameter('contao.prepend_locale', $mergedConfig['prepend_locale']);
        $container->setParameter('contao.encryption_key', $mergedConfig['encryption_key']);
        $container->setParameter('contao.url_suffix', $mergedConfig['url_suffix']);
        $container->setParameter('contao.upload_path', $mergedConfig['upload_path']);
        $container->setParameter('contao.csrf_token_name', $mergedConfig['csrf_token_name']);
        $container->setParameter('contao.pretty_error_screens', $mergedConfig['pretty_error_screens']);
        $container->setParameter('contao.error_level', $mergedConfig['error_level']);
        $container->setParameter('contao.image.bypass_cache', $mergedConfig['image']['bypass_cache']);
        $container->setParameter('contao.image.target_path', $mergedConfig['image']['target_path']);
        $container->setParameter('contao.security.disable_ip_check', $mergedConfig['security']['disable_ip_check']);
        $container->setParameter('contao.security.autologin.cookie_lifetime', $mergedConfig['security']['autologin']['cookie_lifetime']);
        $container->setParameter('contao.security.autologin.cookie_name', $mergedConfig['security']['autologin']['cookie_name']);
        $container->setParameter('contao.security.autologin.formfield_name', $mergedConfig['security']['autologin']['formfield_name']);
    }
}

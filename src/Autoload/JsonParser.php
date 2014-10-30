<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Contao\CoreBundle\Autoload;

use Symfony\Component\Finder\SplFileInfo;

/**
 * Converts a JSON configuration file into a configuration array
 *
 * @author Leo Feyer <https://contao.org>
 */
class JsonParser implements ParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function parse(SplFileInfo $file)
    {
        $json = $this->parseJsonFile($file);

        foreach ($json['bundles'] as $class => &$options) {
            $options = $this->normalize($options);

            $options['class'] = $class;

            $ref = new \ReflectionClass($class);
            $options['name'] = $ref->getShortName();
        }

        return $json;
    }

    /**
     * Parses the file and returns the configuration array
     *
     * @param SplFileInfo $file The file object
     *
     * @return array The configuration array
     *
     * @throws \InvalidArgumentException If $file is not a file
     * @throws \RuntimeException         If the file cannot be decoded or there are no bundles
     */
    protected function parseJsonFile(SplFileInfo $file)
    {
        if (!$file->isFile()) {
            throw new \InvalidArgumentException("$file is not a file");
        }

        $json = json_decode($file->getContents(), true);

        if (null === $json) {
            throw new \RuntimeException("File $file cannot be decoded");
        }

        if (empty($json['bundles'])) {
            throw new \RuntimeException("No bundles defined in $file");
        }

        return $json;
    }

    /**
     * Normalize the configuration array
     *
     * @param array $options The configuration array
     *
     * @return array The normalized array
     */
    protected function normalize(array $options)
    {
        if (!$this->hasReplace($options)) {
            $options['replace'] = [];
        }

        if (!$this->hasEnvironments($options)) {
            $options['environments'] = ['all'];
        }

        if (!$this->hasLoadAfter($options)) {
            $options['load-after'] = [];
        }

        return $options;
    }

    /**
     * Checks whether there is a "replace" section
     *
     * @param array $options The options array
     *
     * @return bool True if there is a "replace" section
     */
    protected function hasReplace(array $options)
    {
        return isset($options['replace']) && is_array($options['replace']);
    }

    /**
     * Checks whether there is an "environments" section
     *
     * @param array $options The options array
     *
     * @return bool True if there is an "environments" section
     */
    protected function hasEnvironments(array $options)
    {
        return isset($options['environments']) && is_array($options['environments']);
    }

    /**
     * Checks whether there is a "load-after" section
     *
     * @param array $options The options array
     *
     * @return bool True if there is a "load-after" section
     */
    protected function hasLoadAfter(array $options)
    {
        return isset($options['load-after']) && is_array($options['load-after']);
    }
}

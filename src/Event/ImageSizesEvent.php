<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Event;

use Contao\BackendUser;
use Symfony\Component\EventDispatcher\Event;

/**
 * Allows to filter image sizes.
 *
 * @author Kamil Kuzminski <https://github.com/qzminski>
 * @author Andreas Schempp <https://github.com/aschempp>
 */
class ImageSizesEvent extends Event
{
    /**
     * @var array
     */
    private $imageSizes;

    /**
     * @var BackendUser
     */
    private $user;

    /**
     * Constructor.
     *
     * @param array            $imageSizes The image sizes
     * @param BackendUser|null $user       An optional user object
     */
    public function __construct(array $imageSizes, BackendUser $user = null)
    {
        $this->imageSizes = $imageSizes;
        $this->user = $user;
    }

    /**
     * Returns the image sizes.
     *
     * @return array The image sizes
     */
    public function getImageSizes()
    {
        return $this->imageSizes;
    }

    /**
     * Sets the image sizes.
     *
     * @param array $imageSizes The image sizes
     */
    public function setImageSizes(array $imageSizes)
    {
        $this->imageSizes = $imageSizes;
    }

    /**
     * Returns the back end user object.
     *
     * @return BackendUser The back end user object
     */
    public function getUser()
    {
        return $this->user;
    }
}

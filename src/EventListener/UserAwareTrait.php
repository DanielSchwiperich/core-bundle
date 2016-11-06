<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\EventListener;

use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Provides methods to test if there is a user.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
trait UserAwareTrait
{
    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * Sets the token storage object.
     *
     * @param TokenStorageInterface $tokenStorage
     */
    public function setTokenStorage(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * Checks if there is an authenticated user.
     *
     * @return bool
     */
    protected function hasUser()
    {
        $user = $this->tokenStorage->getToken();

        if (null === $user) {
            return false;
        }

        return !($user instanceof AnonymousToken);
    }
}

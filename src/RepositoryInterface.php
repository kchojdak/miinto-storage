<?php

declare (strict_types=1);

namespace Miinto\Storage;

/**
 * Interface RepositoryInterface
 *
 * @package Miinto\Storage
 */
interface RepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAdapter();
}
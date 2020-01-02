<?php

declare (strict_types=1);

namespace Miinto\Storage;

/**
 * Interface StorableInterface
 *
 * @package Miinto\Storage
 */
interface StorableInterface
{
    /**
     * @return mixed
     */
    public function getId();
}
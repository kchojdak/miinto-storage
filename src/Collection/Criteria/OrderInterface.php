<?php

declare (strict_types=1);

namespace Miinto\Storage\Collection\Criteria;

/**
 * Interface OrderInterface
 *
 * @package Miinto\Storage\Collection\Criteria
 */
interface OrderInterface
{
    /**
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getType(): string;
}
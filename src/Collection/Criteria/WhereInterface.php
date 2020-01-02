<?php

declare (strict_types=1);

namespace Miinto\Storage\Collection\Criteria;

/**
 * Interface WhereInterface
 *
 * @package Miinto\Storage\Collection\Criteria
 */
interface WhereInterface
{
    const TYPE_EQ = 'EQ';
    const TYPE_IN = 'IN';
    const TYPE_GT = 'GT';
    const TYPE_LT = 'LT';

    /**
     * @param string $name
     * @param string $type
     * @param mixed $data
     */
    public function __construct(string $name, string $type, $data);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return mixed
     */
    public function getData();
}
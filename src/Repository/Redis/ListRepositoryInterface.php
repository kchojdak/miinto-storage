<?php

declare (strict_types=1);

namespace Miinto\Storage\Repository\Redis;

/**
 * Interface ListRepositoryInterface
 *
 * @package Miinto\Storage\Repository\Redis
 */
interface ListRepositoryInterface
{
    /**
     * @return \Miinto\Storage\StorableInterface
     *
     * @throws \Exception
     */
    public function popLeft(): \Miinto\Storage\StorableInterface;

    /**
     * @return \Miinto\Storage\StorableInterface
     *
     * @throws \Exception
     */
    public function popRight(): \Miinto\Storage\StorableInterface;

    /**
     * @param \Miinto\Storage\StorableInterface $storable
     *
     * @return bool
     */
    public function pushLeft(\Miinto\Storage\StorableInterface $storable): bool;

    /**
     * @param \Miinto\Storage\StorableInterface $storable
     *
     * @return bool
     */
    public function pushRight(\Miinto\Storage\StorableInterface $storable): bool;

    /**
     * @param int $rows
     *
     * @return array
     *
     * @throws \Exception
     */
    public function popLeftMany(int $rows): array;

    /**
     * @param int $rows
     *
     * @return array
     *
     * @throws \Exception
     */
    public function popRightMany(int $rows): array;

    /**
     * @param array $collection
     *
     * @return bool
     */
    public function pushLeftMany(array $collection): bool;

    /**
     * @param array $collection
     *
     * @return bool
     */
    public function pushRightMany(array $collection): bool;
}
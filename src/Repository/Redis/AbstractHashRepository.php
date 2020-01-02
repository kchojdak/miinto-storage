<?php

declare (strict_types=1);

namespace Miinto\Storage\Repository\Redis;

/**
 * Class AbstractHashRepository
 *
 * @package Miinto\Storage\Repository\Redis
 */
abstract class AbstractHashRepository implements \Miinto\Storage\Repository\Redis\HashRepositoryInterface
{
    /**
     * @var \Redis
     */
    protected $redis;

    /**
     * @var string
     */
    protected $group;

    /**
     * @inheritDoc
     */
    public function __construct(\Redis $redis, string $group)
    {
        $this->redis = $redis;
        $this->group = $group;
    }

    /**
     * @inheritDoc
     */
    public function read(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function create(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function update(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function delete(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function readMany(\Miinto\Storage\Collection\CriteriaInterface $criteria): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function createMany(array $collection): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function updateMany(array $collection): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function deleteMany(array $collection): array
    {
        return [];
    }
}
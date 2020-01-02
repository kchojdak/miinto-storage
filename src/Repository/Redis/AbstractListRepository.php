<?php

declare (strict_types=1);

namespace Miinto\Storage\Repository\Redis;

/**
 * Class AbstractListRepository
 *
 * @package Miinto\Storage\Repository\Redis
 */
abstract class AbstractListRepository implements \Miinto\Storage\Repository\Redis\ListRepositoryInterface
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
    public function popLeft(): \Miinto\Storage\StorableInterface
    {
        throw new \Miinto\Storage\Exception\NotFound('Not found');
    }

    /**
     * @inheritDoc
     */
    public function popRight(): \Miinto\Storage\StorableInterface
    {
        throw new \Miinto\Storage\Exception\NotFound('Not found');
    }

    /**
     * @inheritDoc
     */
    public function pushLeft(\Miinto\Storage\StorableInterface $storable): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function pushRight(\Miinto\Storage\StorableInterface $storable): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function popLeftMany(int $rows): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function popRightMany(int $rows): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function pushLeftMany(array $collection): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function pushRightMany(array $collection): bool
    {
        return true;
    }
}
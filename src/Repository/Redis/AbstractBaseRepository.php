<?php

declare (strict_types=1);

namespace Miinto\Storage\Repository\Redis;

/**
 * Class AbstractBaseRepository
 *
 * @package Miinto\Storage\Repository\Redis
 */
abstract class AbstractBaseRepository implements \Miinto\Storage\Repository\Redis\BaseRepositoryInterface
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
        $this->redis->get($this->getKey($storable));
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function create(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        $this->redis->set($this->getKey($storable), \json_encode($storable));
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function update(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        $this->redis->set($this->getKey($storable), \json_encode($storable));
        return $storable;
    }

    /**
     * @inheritDoc
     */
    public function delete(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface
    {
        $this->redis->del($this->getKey($storable));
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
        if (empty($collection)) {
            throw new \Exception('Collection is empty');
        }
        $result = $this->redis->mSetNx(
            \array_merge(
                \array_map(
                    function (\Miinto\Storage\StorableInterface $storable) {
                        return [
                            $this->getKey($storable) => \json_encode($storable)
                        ];
                    },
                    $collection
                )
            )
        );
        if (!$result) {
            throw new \Exception('Create failed');
        }
        return $collection;
    }

    /**
     * @inheritDoc
     */
    public function updateMany(array $collection): array
    {
        if (empty($collection)) {
            throw new \Exception('Collection is empty');
        }
        $result = $this->redis->mSet(
            \array_merge(
                \array_map(
                    function (\Miinto\Storage\StorableInterface $storable) {
                        return [
                            $this->getKey($storable) => \json_encode($storable)
                        ];
                    },
                    $collection
                )
            )
        );
        if (!$result) {
            throw new \Exception('Update failed');
        }
        return $collection;
    }

    /**
     * @inheritDoc
     */
    public function deleteMany(array $collection): array
    {
        if (empty($collection)) {
            throw new \Exception('Collection is empty');
        }
        $this->redis->unlink(
            \array_map(
                function (\Miinto\Storage\StorableInterface $storable) {
                    return $this->getKey($storable);
                },
                $collection
            )
        );
        return $collection;
    }

    /**
     * @param \Miinto\Storage\StorableInterface $storable
     */
    protected function getKey(\Miinto\Storage\StorableInterface $storable): string
    {
        return \sprintf('%_%', $this->group, $storable->getId());
    }
}
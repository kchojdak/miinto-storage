<?php

declare (strict_types=1);

namespace Miinto\Storage\Repository\Pgsql;

/**
 * Class AbstractBaseRepository
 *
 * @package Miinto\Storage\Repository\Pgsql
 */
abstract class AbstractBaseRepository implements \Miinto\Storage\Repository\Pgsql\BaseRepositoryInterface
{
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
<?php

declare (strict_types=1);

namespace Miinto\Storage\Repository;

/**
 * Interface CrudRepositoryInterface
 *
 * @package Miinto\Storage\Repository
 */
interface CrudRepositoryInterface extends \Miinto\Storage\RepositoryInterface
{
    /**
     * @param \Miinto\Storage\StorableInterface $storable
     *
     * @return \Miinto\Storage\StorableInterface
     *
     * @throws \Exception
     */
    public function read(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface;

    /**
     * @param \Miinto\Storage\StorableInterface $storable
     *
     * @return \Miinto\Storage\StorableInterface
     *
     * @throws \Exception
     */
    public function create(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface;

    /**
     * @param \Miinto\Storage\StorableInterface $storable
     *
     * @return \Miinto\Storage\StorableInterface
     *
     * @throws \Exception
     */
    public function update(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface;

    /**
     * @param \Miinto\Storage\StorableInterface $storable
     *
     * @return \Miinto\Storage\StorableInterface
     *
     * @throws \Exception
     */
    public function delete(\Miinto\Storage\StorableInterface $storable): \Miinto\Storage\StorableInterface;

    /**
     * @param \Miinto\Storage\Collection\CriteriaInterface $criteria
     *
     * @return array
     *
     * @throws \Exception
     */
    public function readMany(\Miinto\Storage\Collection\CriteriaInterface $criteria): array;

    /**
     * @param array $collection
     *
     * @return array
     *
     * @throws \Exception
     */
    public function createMany(array $collection): array;

    /**
     * @param array $collection
     *
     * @return array
     *
     * @throws \Exception
     */
    public function updateMany(array $collection): array;

    /**
     * @param array $collection
     *
     * @return array
     *
     * @throws \Exception
     */
    public function deleteMany(array $collection): array;
}
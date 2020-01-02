<?php

declare (strict_types=1);

namespace Miinto\Storage\Collection;

/**
 * Interface CriteriaInterface
 *
 * @package Miinto\Storage\Collection
 */
interface CriteriaInterface
{
    /**
     * @param \Miinto\Storage\Collection\Criteria\WhereInterface $where
     */
    public function addWhere(\Miinto\Storage\Collection\Criteria\WhereInterface $where): void;

    /**
     * @param \Miinto\Storage\Collection\Criteria\OrderInterface $order
     */
    public function addOrder(\Miinto\Storage\Collection\Criteria\OrderInterface $order): void;

    /**
     * @return \Miinto\Storage\Collection\Criteria\WhereInterface[]
     */
    public function getWheres(): array;

    /**
     * @return \Miinto\Storage\Collection\Criteria\OrderInterface[]
     */
    public function getOrders(): array;
}
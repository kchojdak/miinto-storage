<?php

declare (strict_types=1);

namespace Miinto\Storage\Collection;

/**
 * Class Criteria
 *
 * @package Miinto\Storage\Collection
 */
class Criteria implements \Miinto\Storage\Collection\CriteriaInterface
{
    /**
     * @var array
     */
    protected $wheres = [];

    /**
     * @var array
     */
    protected $orders = [];

    /**
     * @inheritDoc
     */
    public function addWhere(\Miinto\Storage\Collection\Criteria\WhereInterface $where): void
    {
        \array_push($this->wheres, $where);
    }

    /**
     * @inheritDoc
     */
    public function addOrder(\Miinto\Storage\Collection\Criteria\OrderInterface $order): void
    {
        \array_push($this->orders, $order);
    }

    /**
     * @inheritDoc
     */
    public function getWheres(): array
    {
        return $this->wheres;
    }

    /**
     * @inheritDoc
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
}
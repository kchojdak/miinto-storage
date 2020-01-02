<?php

declare (strict_types=1);

namespace Miinto\Storage\Collection\Criteria;

/**
 * Class Order
 *
 * @package Miinto\Storage\Collection\Criteria
 */
class Order implements \Miinto\Storage\Collection\Criteria\OrderInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @inheritDoc
     */
    public function __construct(string $name, string $type)
    {
        $this->setName($name);
        $this->setType($type);
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name;
    }

    /**
     * @param string $type
     */
    private function setType(string $type): void
    {
        $this->type;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return $this->type;
    }

}
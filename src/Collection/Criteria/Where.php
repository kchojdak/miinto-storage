<?php

declare (strict_types=1);

namespace Miinto\Storage\Collection\Criteria;

/**
 * Class Where
 *
 * @package Miinto\Storage\Collection\Criteria
 */
class Where implements \Miinto\Storage\Collection\Criteria\WhereInterface
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
     * @var mixed
     */
    protected $data;

    /**
     * @inheritDoc
     */
    public function __construct(string $name, string $type, $data)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setData($data);
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $type
     *
     * @throws \Exception
     */
    private function setType(string $type): void
    {
        if (!\in_array($type, [
            self::TYPE_EQ,
            self::TYPE_IN,
            self::TYPE_GT,
            self::TYPE_LT
        ])) {
            throw new \Exception('Invalid type');
        }

        $this->type = $type;
    }

    /**
     * @param string $data
     */
    private function setData($data): void
    {
        $this->data = $data;
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

    /**
     * @inheritDoc
     */
    public function getData()
    {
        return $this->data;
    }
}
<?php

namespace App;

class Product {

    /**
     * @param string $name
     * @param int $cost
     */
    public function __construct(protected string $name, protected int $cost)
    {
    }

    /**
     * Get product name
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Get product cost
     *
     * @return int
     */
    public function cost(): int
    {
        return $this->cost;
    }
}

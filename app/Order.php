<?php

namespace App;

class Order
{
    protected array $products = [];


    /**
     * Add new product to order
     *
     * @param Product $product
     * @return void
     */
    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    /**
     * Get list of product in the order
     *
     * @return array
     */
    public function products(): array
    {
        return $this->products;
    }


    public function total()
    {
//        $total = 0;
//
//        foreach ($this->products as $product) {
//            $total += $product->cost();
//        }
//
//        return $total;

        return array_reduce($this->products, function ($carry, $product) {
            return $carry + $product->cost();
        });
    }
}

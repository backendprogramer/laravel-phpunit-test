<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Order;
use App\Product;

class OrderTest extends TestCase
{
    /**
     * @test
     * @author Ali Ghorbani
     */
    public function an_order_consists_of_product(): void
    {
        $order = $this->createOrderWithProducts();

        $this->assertCount(2, $order->products());
    }

    /**
     * @test
     * @author Ali Ghorbani
     */
    public function an_order_can_determine_the_total_cost_all_its_products()
    {
        $order = $this->createOrderWithProducts();

        $this->assertEquals(63, $order->total());
    }

    protected function createOrderWithProducts(): Order
    {
        $order = new Order();

        $product1 = new Product('Samsung A51', 59);
        $product2 = new Product('Glass Samsung A51', 4);

        $order->add($product1);
        $order->add($product2);

        return $order;
    }
}

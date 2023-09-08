<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Product;

class ProductTest extends TestCase
{
    protected Product $product;

    protected function setUp(): void
    {
        parent::setUp();
        $this->product = new Product('Samsung A51', 59);
    }

    /**
     * @test
     * @author Ali Ghorbani
     */
    public function test_a_product_has_a_name(): void
    {
        $this->assertEquals('Samsung A51', $this->product->name());
    }

    /**
     * @test
     * @author Ali Ghorbani
     */
    public function test_a_product_has_a_cost(): void
    {
       $this->assertEquals(59, $this->product->cost());
    }
}

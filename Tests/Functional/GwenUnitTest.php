<?php

namespace GwenUnitTest\Tests;

use Shopware\Bundle\StoreFrontBundle\Struct\ListProduct;
use Shopware\Components\Test\Plugin\TestCase;
use GwenUnitTest\Service\TestExampleService;

class GwenUnitTest extends TestCase
{
    public function testSomething()
    {
        /** @var TestExampleService $service */
        $service = Shopware()->Container()->get('gwen_unit_test.test_service');
        /** @var ListProduct $product */
        $product = $service->getFancyRedSunGlasses();

        $this->assertInstanceOf(ListProduct::class, $product);
        $this->assertEquals('Sonnenbrille "Red"', $product->getName());
    }
}

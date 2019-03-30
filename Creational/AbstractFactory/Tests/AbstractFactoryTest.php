<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\DigitalProduct;
use DesignPatterns\Creational\AbstractFactory\ShippableProduct;
use DesignPatterns\Creational\AbstractFactory\ProductFactory;
use PHPUnit\Framework\TestCase;

require_once '../DigitalProduct.php';
require_once '../ShippableProduct.php';
require_once '../ProductFactory.php';

class AbstractFactoryTest extends TestCase
{
	public function testCanCreateDigitalProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createDigitalProduct(150);
		$this->assertInstanceOf(DigitalProduct::class, $product);
	}
	public function testCanCreateShippableProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createShippableProduct(150);
		$this->assertInstanceOf(ShippableProduct::class, $product);
	}
	public function testCanCalculatePriceForDigitalProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createDigitalProduct(150);
		$this->assertEquals(150, $product->calculatePrice());
	}
	public function testCanCalculatePriceForShippableProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createShippableProduct(150);
		$this->assertEquals(200, $product->calculatePrice());
	}
}
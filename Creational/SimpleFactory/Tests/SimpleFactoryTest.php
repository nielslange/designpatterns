<?php

use DesignPatterns\Creational\SimpleFactory\Bicycle;
use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

require_once('../Bicycle.php');
require_once('../SimpleFactory.php');

class SimpleFactoryTest extends TestCase
{
	public function testCanCreateBicycle()
	{
		$bicycle = (new SimpleFactory())->createBicycle();
		$this->assertInstanceOf(Bicycle::class, $bicycle);
	}
}
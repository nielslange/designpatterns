<?php

namespace DesignPatterns\Creational\AbstractFactory;

require_once 'Product.php';

class DigitalProduct implements Product
{
	private $price;

	public function __construct(int $price) {
		$this->price = $price;
	}

	public function calculatePrice(): int {
		return $this->price;
	}
}
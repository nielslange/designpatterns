<?php

namespace DesignPatterns\Creational\AbstractFactory;

require_once 'Product.php';

class ShippableProduct implements Product
{
	private $productPrice;
	private $shippingCosts;

	public function __construct(int $productPrice, int $shippingCosts) {
		$this->productPrice = $productPrice;
		$this->shippingCosts = $shippingCosts;
	}

	public function calculatePrice(): int {
		return $this->productPrice + $this->shippingCosts;
	}
}
<?php

namespace DesignPatterns\Creational\SimpleFactory;

require_once('Bicycle.php');

class simpleFactory
{
	public function createBicycle(): Bicycle
	{
		return new Bicycle();
	}
}
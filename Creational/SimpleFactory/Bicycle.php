<?php

namespace DesignPatterns\Creational\SimpleFactory;

class Bicycle
{
	public function driveTo(string $destination)
	{
		printf('<p>Driving to %s</p>', $destination);
	}
}

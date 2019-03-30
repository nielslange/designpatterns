<?php

namespace DesignPatterns\Creational\SimpleFactory;

require_once('Classes/SimpleFactory.php');

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Paris');
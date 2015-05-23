<?php

require_once 'Client.php';
require_once 'Factory.php';
require_once 'Factory/CarFactory.php';
require_once 'Factory/FurnitureFactory.php';
require_once 'Product.php';
require_once 'Product/Car.php';
require_once 'Product/Furniture.php';
require_once 'Product/Car/Audi.php';
require_once 'Product/Car/Ford.php';
require_once 'Product/Furniture/Sofa.php';
require_once 'Product/Furniture/Table.php';

$client = new Client();

try {

    $audi = $client->setCar('Audi')->getCar()->getProperties();
    var_dump($audi);
} catch (Exception $e) {

    echo $e->getMessage();
}
try {

    $ford = $client->setCar('Ford')->getCar()->getProperties();
    var_dump($ford);
} catch (Exception $e) {

    echo $e->getMessage();
}
try {

    $fiat = $client->setCar('Fiat')->getCar()->getProperties();
    var_dump($fiat);
} catch (Exception $e) {

    echo $e->getMessage();
}
try {

    $sofa = $client->setFurniture('Sofa')->getFurniture()->getProperties();
    var_dump($sofa);
} catch (Exception $e) {

    echo $e->getMessage();
}
try {

    $table = $client->setFurniture('Table')->getFurniture()->getProperties();
    var_dump($table);
} catch (Exception $e) {

    echo $e->getMessage();
}


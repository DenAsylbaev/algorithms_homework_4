<?php

require 'Logistic/Logistic.php';
require 'Logistic/RoadLogistic.php';
require 'Logistic/ShipLogistic.php';

require 'Transport/Transport.php';
require 'Transport/Car.php';
require 'Transport/Ship.php';

require 'CostCalculation/CostCalculation.php';
require 'CostCalculation/RoadCalculation.php';
require 'CostCalculation/ShipCalculation.php';


function test(Logistic $logistic)
{
    echo $logistic->calculate();
    $logistic->startDelivery();

}

$logistic = new RoadLogistic();
test($logistic);
echo "-----------".PHP_EOL;
$logistic = new ShipLogistic();
test($logistic);
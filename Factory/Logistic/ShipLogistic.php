<?php


class ShipLogistic extends Logistic
{

    protected function createTransport(): Transport
    {
        echo "Доставка морем".PHP_EOL;
        return new Ship();
    }

    protected function createCostCalculation(): CostCalculation
    {
        return new ShipCalculation();
    }
}
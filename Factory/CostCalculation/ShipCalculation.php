<?php


class ShipCalculation extends CostCalculation
{

    public function calculation(): int
    {
        echo "Расчет стоимости доставки морем";
        return 40000;
    }
}
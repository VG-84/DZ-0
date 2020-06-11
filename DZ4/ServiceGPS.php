<?php

class ServiceGPS implements Serviceinterface
{
    private $priceHour;
    public function __construct(int $priceHour)
    {
        $this->priceHour = $priceHour;
    }
    public function apply(Tariffinterface $tariff, &$price)
    {
        $hours = ceil($tariff->getTime() / 60);
        $price += $this->priceHour * $hours;
    }
}
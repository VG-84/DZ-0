<?php


abstract class TariffAbstract implements Tariffinterface
{
    protected $pricePerKm;
    protected $pricePerMin;
    protected $distance;
    protected $minutes;
    protected $services = [];

    public function __construct(int $distance, int $minutes)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }

    public function countPrice(): int
    {
        $price = $this->distance * $this->pricePerKm + $this->minutes * $this->pricePerMin;
        if ($this->services)
        {
            foreach ($this->services as $service)
            {
                $service->apply($this,$price);
            }
        }
        return $price;
    }
    public function addService(Serviceinterface $service): Tariffinterface
    {
        array_push($this->service, $service);
        return $this;
    }

    public function getTime(): int
    {
        return $this->minutes;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
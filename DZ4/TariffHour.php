<?php
class TariffHour extends TariffAbstract
{
    protected $pricePerKm = 0;
    protected  $pricePerMin = 200 /60;
    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);
        $this->minutes = $this->minutes - $this->minutes % 60 + 60;
    }
}
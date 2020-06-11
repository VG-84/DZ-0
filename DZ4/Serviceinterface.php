<?php
interface Serviceinterface
{
    public function apply(Tariffinterface $tariff, &$price);
}
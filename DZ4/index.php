<?php
include "Tariffinterface.php";
include "Serviceinterface.php";
include "TariffAbstract.php";
include "TariffBasic.php";
include "ServiceGPS.php";
include "ServiceDriver.php";
include "TariffHour.php";
include "TariffStudent.php";

$tariff = new TariffStudent(3,60);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();

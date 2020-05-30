<?php

$bmw =
    [
        'model'=> 'X5',
        'speed'=> '120',
        'doors'=> '5',
        'year'=>  '2015'
    ];
$toyota =
    [
        'model'=> 'LC200',
        'speed'=> '100',
        'doors'=> '5',
        'year'=>  '2012'
    ];
$opel =
    [
        'model'=> 'zafira',
        'speed'=> '80',
        'doors'=> '5',
        'year'=>  '2010'
    ];
$cars = ['bmw'=> $bmw, 'toyota'=> $toyota, 'opel'=> $opel];

foreach ($cars as $name=> $car)
{
    echo "car $name <br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br>";
}
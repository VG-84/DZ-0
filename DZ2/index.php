<?php
include "functions.php";

echo task1([1,2,3]);

echo task2(+,1,2,3,4);

echo task3(5,5);

/**Task4*/
date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i');
echo '<br>';
 echo strtotime('24.02.2016 00:00:00');
 echo '<br>';
 echo date('Y-m-d H:i:s', 1456261200);

 /**Task5*/
$string = 'Карл у Клары украл Кораллы';
echo  str_replace('Две', 'Три', $string);
echo '<br>';
$string = 'Две бутылки лимонада';
echo  str_replace('К', '', $string);
echo '<br>';

/**Task6*/
file_put_contents('Test.txt', 'Hello again!');
Task6('test.txt');



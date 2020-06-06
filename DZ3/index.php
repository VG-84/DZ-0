<?php
include "functions.php";

/** TASK 3-1 */
echo '<pre>';
for ($i = 1 ; $i <= 50; $i++)
{
    $CRT[] = CRT();
}
/** Преобразуйте массив в json и сохраните в файл users.json */
file_put_contents('users.json', json_encode($CRT));
$newUsers = file_get_contents('users.json');
/**Преобразуйте данные из него обратно ассоциативный массив РНР*/
$decodeUsers = json_decode($newUsers, true);

/**Посчитайте количество пользователей с каждым именем в массиве. Посчитайте средний возраст пользователей*/
$sumnames =[];
$sumage =0;
foreach ($decodeUsers as $user)
{
    if (isset($sumnames[$user['name']]))
    {
        $sumnames[$user['name']]++;
    }
    else
        {
            $sumnames[$user['name']] = 1;
        }
    $sumage += $user['age'];
}
var_dump($sumnames);
echo 'sumage' . ($sumage / sizeof($decodeUsers));

echo '</pre>';
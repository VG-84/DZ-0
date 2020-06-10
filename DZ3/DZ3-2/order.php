<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//подключаем файл с конфигурацией базы данных
include_once 'config.php';


//подключение к БД
function connect()
{
    return $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}
//проверяем наличие пользователя по его  email
function valider($connect, $email)
{
    $query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($connect, $query);
    return $result;
}
//получаем данные пользователя по его email
function getUser($connect, $email)
{
    $query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($connect, $query);
    $result = mysqli_fetch_all($result);
    return $result;
}
//добавляем пользователя
function addUser($connect, $email, $name)
{
    $query = "INSERT INTO `users`(`email`,`orders`,`name`) VALUES ('$email', 1, '$name')";
    $result = mysqli_query($connect, $query);
    return $result;
}
//изменяем число заказов пользователя по его идентификатору
function update ($connect, $orders, $id)
{
    $query = "UPDATE users SET orders = $orders WHERE id = $id";
    $result = mysqli_query($connect, $query);
    return $result;
}
//добавляем новый заказ
function addOrder($connect, $user_id, $address)
{
    $query = "INSERT INTO `orders` (`user_id`,`create`, `address`) VALUES ($user_id, NOW(), '$address')";
    $result = mysqli_query($connect, $query);
    return $result;
}
//проверяем данные формы заказа
function main()
{
    $connect = connect();
    $email = $_POST['email']; // приняли значение email
    $name = $_POST['name']; // приняли значение имени пользователя
    $address = $_POST['street'] .', '. $_POST['home'] .', '. $_POST['part'] .', '. $_POST['appt'] .', '. $_POST['floor'];// приняли значение address
    $result = valider($connect, $email); // проверяем наличие пользователя по его  email
    if($result->num_rows) // если пользователь найден , то
    {
        $user = getUser($connect, $email);

//    var_dump($user);
        $user_id = $user[0][0];
        $orders = $user[0][2] + 1; // добавление к счетчику нового заказа +1
        $result = update($connect, $orders, $user_id);

    }
    else// если пользователь не найден
    {
        $user = addUser($connect, $email, $name);// если пользователь не найден, то добавляем нового пользователя
        $user_id = mysqli_insert_id($connect);// запрашиваем идентификатор последнего добавления
        $orders = 1;// это первый заказ нового пользователя
    }
    $result = addOrder($connect, $user_id, $address);// добавление нового заказа
    $order_id = mysqli_insert_id($connect);
    echo 'Спасибо, ваш заказ будет доставлен по адресу: '. $address . '<br>' .
        'Номер вашего заказа: '. $order_id . '<br>' .
        'Это ваш ' . $orders .'-ый(ой) заказ!';
}

main();






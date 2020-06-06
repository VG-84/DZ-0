<?php
include 'config.php';
include 'class.db.php';
include 'functions.php';
include 'class.burger.php';


$burger = new Burger();
$email = $_POST['email'];
$name = $_POST['name'];
$addressFields = ['phone', 'street', 'home', 'part', 'appt', 'floor'];
$address = '';
foreach ($_POST as $field => $value)
{
    if ($value && in_array($field, $addressFields))
    {
        $address .=$value . ',';
    }
}
$data =['address' => $address];

$user = $burger->getUserByEmail($email);

if ($user)
{
    $user_Id = $user['id'];
    $burger->incOrders($user['id']);
    $orderNumber = $user['orders'] +1;
}
else
{
    $orderNumber =1;
    $user_Id = $burger->createUser($email, $name);
}
$orderId = $burger->addOrder($user_Id, $data);
echo "Спасибо, ваш заказ будет доставлен по адресу: “$address<br>”
Номер вашего заказа: #$orderId <br>
Это ваш $orderNumber заказ!";
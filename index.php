<?php
$host = '127.0.0.1';
$mysql = new mysqli($host, 'root', 'root', 'db', 3306);
if (mysqli_connect_errno())
{
    echo 'Connection error:' . mysqli_connect_errno() . '#' . mysqli_connect_error();
}

<?php
const DB_HOST = 'localhost';
const DB_NAME = 'db';
const DB_USER = 'root';
const DB_PASSWORD = 'root';
const ADMIN_IDS = [9];
const MESSAGES_PER_PAGE = 2;

function d(...$args)
{
    var_dump($args);
    die;
}
<?php

require_once __DIR__ . '/vendor/autoload.php';
ini_set('display_errors', 'on');
ini_set('error_reporting', E_ALL | E_NOTICE);

// ДЗ-5.1
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('vitaly.gavrilov.84@mail.ru')
    ->setPassword('interrao99');

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['vitaly.gavrilov.84@mail.ru' => 'Vitaly'])
    ->setTo(['vitaly.gavrilov.84@mail.ru'])
    ->setBody('Message itself');

$result = $mailer->send($message);
var_dump($result);

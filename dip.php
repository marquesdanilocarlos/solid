<?php

use App\DIP\Messenger;

require __DIR__ . "/vendor/autoload.php";

echo "<h2>Email</h2>";
$messengerMail = new Messenger('mail');
$messengerMail->sendToken();

echo "<h2>SMS</h2>";
$messengerSms = new Messenger('sms');
$messengerSms->sendToken();

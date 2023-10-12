<?php

use App\DIP\Mail;
use App\DIP\Messenger;
use App\DIP\Sms;
use App\DIP\WhatsApp;

require __DIR__ . "/vendor/autoload.php";

echo "<h2>Email</h2>";
$messengerMail = new Messenger(new Mail());
$messengerMail->sendToken();

echo "<h2>SMS</h2>";
$messengerSms = new Messenger(new Sms());
$messengerSms->sendToken();

echo "<h2>WhatsApp</h2>";
$messengerSms = new Messenger(new WhatsApp());
$messengerSms->sendToken();

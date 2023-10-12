<?php

namespace App\DIP;

use App\DIP\Interfaces\MessageInterface;

class Sms implements MessageInterface
{
    public function send(): void
    {
        echo "SMS: Seu token é 111-111";
    }
}
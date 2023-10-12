<?php

namespace App\DIP;

use App\DIP\Interfaces\MessageInterface;

class WhatsApp implements MessageInterface
{
    public function send(): void
    {
        echo "SMS: Seu token é 333-333";
    }

}
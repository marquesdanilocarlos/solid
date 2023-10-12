<?php

namespace App\DIP;

use App\DIP\Interfaces\MessageInterface;

class Mail implements MessageInterface
{
    public function send(): void
    {
        echo "Email: Seu token é 999-999";
    }
}
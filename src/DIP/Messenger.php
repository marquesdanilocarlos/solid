<?php

namespace App\DIP;

use App\DIP\Interfaces\MessageInterface;

readonly class Messenger
{
    public function __construct(
        private MessageInterface $channel
    ) {
    }

    public function sendToken(): void
    {
        $this->channel->send();
    }
}
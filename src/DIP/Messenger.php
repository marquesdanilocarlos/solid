<?php

namespace App\DIP;

class Messenger
{
    public function __construct(
        private readonly string $channel
    ) {
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function sendToken(): void
    {
        $obj = $this->channel === 'mail'
            ? new Mail()
            : new Sms();

        $obj->send();
    }
}
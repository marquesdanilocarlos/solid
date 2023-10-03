<?php

namespace App;

class EmailService
{
    public function __construct(
        private string $sender = "marquesdanilocarlos@gmail.com",
        private string $recipient = "",
        private string $subject = "",
        private string $content = ""
    ) {
    }

    public static function send()
    {
        echo "Enviando e-mail...";
    }

}
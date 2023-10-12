<?php

namespace App\ISP\Interfaces;

use App\ISP\Notification;

interface NotificationInterface
{
    public function sendNotification(Notification $notification): bool;
}
<?php

namespace App\ISP\Interfaces;

use App\ISP\Log;
use App\ISP\Notification;

interface RegisterInterface
{
    public function save(): bool;
    public function logRegister(Log $log): bool;
    public function sendNotification(Notification $notification): bool;
}
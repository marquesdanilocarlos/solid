<?php

namespace App\ISP\DAO;

use App\ISP\Database;
use App\ISP\Interfaces\LogInterface;
use App\ISP\Interfaces\NotificationInterface;
use App\ISP\Interfaces\RegisterInterface;
use App\ISP\Log;
use App\ISP\Notification;

class UserModel extends Database implements RegisterInterface, LogInterface, NotificationInterface
{
    public function save(): bool
    {
        return true;
    }

    public function logRegister(Log $log): bool
    {
        return true;
    }

    public function sendNotification(Notification $notification): bool
    {
        return true;
    }

}
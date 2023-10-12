<?php

namespace App\ISP\DAO;

use App\ISP\Database;
use App\ISP\Interfaces\NotificationInterface;
use App\ISP\Interfaces\RegisterInterface;
use App\ISP\Notification;

class LeadModel extends Database implements RegisterInterface, NotificationInterface
{
    public function save(): bool
    {
        return true;
    }

    public function sendNotification(Notification $notification): bool
    {
        return true;
    }

}
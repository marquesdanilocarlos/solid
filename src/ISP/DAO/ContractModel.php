<?php

namespace App\ISP\DAO;

use App\ISP\Database;
use App\ISP\Interfaces\RegisterInterface;
use App\ISP\Log;
use App\ISP\Notification;

class ContractModel extends Database implements RegisterInterface
{
    public function save(): bool
    {
        return true;
    }

}
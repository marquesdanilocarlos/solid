<?php

namespace App\ISP\Interfaces;

use App\ISP\Log;

interface LogInterface
{
    public function logRegister(Log $log): bool;
}
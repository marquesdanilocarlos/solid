<?php

namespace App\LSP;

use InvalidArgumentException;

class Square extends Rectangle
{
    public function __construct(float $area)
    {
        parent::__construct($area, $area);
    }
}
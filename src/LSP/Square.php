<?php

namespace App\LSP;

use InvalidArgumentException;

class Square implements FormInterface
{
    private float $width;
    private float $height;

    public function __construct(float $area)
    {
        $this->width = $area;
        $this->height = $area;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeigth(): float
    {
        return $this->height;
    }


}
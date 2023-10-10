<?php

namespace App\LSP;

class Rectangle implements FormInterface
{
    public function __construct(
        protected float $width,
        protected float $heigth
    )
    {
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeigth(): float
    {
        return $this->heigth;
    }
}
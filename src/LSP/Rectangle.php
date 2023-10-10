<?php

namespace App\LSP;

class Rectangle
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

    public function getArea(): float
    {
        return $this->getHeigth() * $this->getWidth();
    }
}
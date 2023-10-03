<?php

namespace App;

class Product
{

    public function __construct(
        private string $description = "",
        private float $value = 0
    )
    {
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }


}
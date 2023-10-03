<?php

namespace App;

class Product
{

    private string $description;
    private float $value;

    public function __construct(
        string $description,
        float $value
    ) {
        $this->setDescription($description);
        $this->setValue($value);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        if (!$description) {
            throw new \InvalidArgumentException("A descrição não pode ser vazia.");
        }
        $this->description = $description;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        if (!$value) {
            throw new \InvalidArgumentException("O valor não pode ser zerado.");
        }

        $this->value = $value;
    }


}
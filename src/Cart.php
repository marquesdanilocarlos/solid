<?php

namespace App;

class Cart
{
    public function __construct(
        private array $items = [],
        private string $status = 'aberto',
        private float $totalValue = 0
    ) {
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(string $item, float $value): void
    {
        array_push($this->items, ["item" => $item, "valor" => $value]);
        $this->totalValue += $value;
    }

    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function confirmOrder(): bool
    {
        if (!$this->validateCart()) {
            return false;
        }

        $this->status = 'confirmado';
        $this->sendConfirmEmail();
        return true;
    }

    public function sendConfirmEmail(): void
    {
        echo "Enviando e-mail de confirmação... <br/>";
    }

    public function validateCart(): bool
    {
        return count($this->items) > 0;
    }
}
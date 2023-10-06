<?php

namespace App\SRP;

class Order
{
    public function __construct(
        private Cart $cart,
        private float $totalValue = 0,
        private OrderStatus $status = OrderStatus::OPEN
    )
    {
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    public function setTotalValue(float $totalValue): void
    {
        $this->totalValue = $totalValue;
    }

    public function getStatus(): OrderStatus
    {
        return $this->status;
    }

    public function setStatus(OrderStatus $status): void
    {
        $this->status = $status;
    }

    public function confirm():bool
    {
        if (!$this->cart->validateCart()) {
            return false;
        }

        $this->setStatus(OrderStatus::CONFIRMED);
        $cartValue = $this->getCart()->getTotalValue();
        $this->setTotalValue($cartValue);
        EmailService::send();
        return true;
    }
}
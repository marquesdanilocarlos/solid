<?php

namespace App;

class Cart
{
    public function __construct(
        /**
         * @var Product[] $products
         */
        private array $products = [],
        private float $totalValue = 0
    ) {
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
        $this->totalValue += $product->getValue();
    }

    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    public function validateCart(): bool
    {
        return count($this->products) > 0;
    }
}
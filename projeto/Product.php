<?php
class Product
{
    public function __construct(
        private string $name,
        private float $price,
        private int $stock,
        private string $description
    ) {}
    
    public function isInStock(): bool
    {
        return $this->stock > 0;
    }


    public function purchase(int $quantity): bool
    {
        if ($quantity <= $this->stock) {
            $this->stock -= $quantity;
            return true;
        }
        return false;
    }
}

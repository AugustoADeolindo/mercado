<?php
class Product
{
    public function __construct(
        public string $name,
        public float $price,
        public int $stock,
        public string $description
    ) {}
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isInStock(): bool
    {
        return $this->stock > 0;
    }

    public function purchase(int $quantity): void
    {
        if ($quantity <= $this->stock) {
            $this->stock -= $quantity;
        } else {
            echo "Sorry, We can't stock of this Product.";
        };
    }
}

<?php
require_once './Product.php';


class ShoppingCart
{
    protected array $items = [];

    public function addItem(Product $product, int $quantity): void
    {
        $this->items[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }

    public function calculateTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }
        return $total;
    }
}

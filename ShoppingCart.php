<?php
require_once './Product.php';
require_once './Costumer.php';

class ShoppingCart
{
    protected array $cart = [];

    public function addItem( array $product, int $quantity): void
    {
        $this->cart[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }

    public function calculateTotal(): void
    {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['product']['price'] * $item['quantity'];
        }
        echo "\nTotal Amount: $" . number_format($total, 2) . "\n";
    }
}

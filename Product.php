<?php
class Product
{
    public static array $list = [
        ['name' => 'Apple', 'price' => 1.00, 'stock' => 100, 'description' => 'Fresh red apples'],
        ['name' => 'Banana', 'price' => 0.50, 'stock' => 150, 'description' => 'Ripe yellow bananas'],
        ['name' => 'Orange', 'price' => 0.80, 'stock' => 120, 'description' => 'Juicy oranges'],
        ['name' => 'Grapes', 'price' => 2.00, 'stock' => 80, 'description' => 'Sweet seedless grapes'],
        ['name' => 'Mango', 'price' => 1.50, 'stock' => 60, 'description' => 'Tropical mangoes'],
        ['name' => 'Pineapple', 'price' => 3.00, 'stock' => 40, 'description' => 'Fresh pineapples'],
        ['name' => 'Strawberry', 'price' => 2.50, 'stock' => 90, 'description' => 'Sweet strawberries'],
        ['name' => 'Blueberry', 'price' => 2.80, 'stock' => 70, 'description' => 'Fresh blueberries'],
        ['name' => 'Watermelon', 'price' => 4.00, 'stock' => 30, 'description' => 'Juicy watermelons'],
        ['name' => 'Peach', 'price' => 1.20, 'stock' => 110, 'description' => 'Sweet peaches']
    ];

    public static function getProductList(): void{
        foreach(self::$list as $index => $product){
            echo "({$index}) Name: " . $product['name'] . " | Price: $" . number_format($product['price'], 2) . " | Stock: " . $product['stock'] . " | Description: " . $product['description'] . "\n";
        }
    }

    public static function getPrice(int $position): float{
        return self::$list[$position]['price'];
    }   
}

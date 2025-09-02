<?php
require_once './Product.php';
require_once './ShoppingCart.php';


$productOne = new Product(name: "Apple", price: 20.99, stock: 0, description: "Fuji");

// Checking if product is available
if ($productOne->isInStock()) {
    // Purchase 2 laptops
    $productOne->purchase(10);
}else{
    echo "Sorry, We can't stock of this Product.";
};



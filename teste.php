<?php 
function testShoppingCart(): void
{
    $choice = 0;
    $shoppingCart = new ShoppingCart();

    Costumer::getCostumers();
    echo "Select a costumer by POSITION: ";
    $costumerPosition = trim(fgets(STDIN));

    while ($choice != 3) {
        echo "\nSHOPPING CART OF COSTUMER: " . Costumer::$costumers[$costumerPosition]->getName();
        echo "\n(1)Catalog\n";
        echo "(2) Finish shopping\n";
        echo "(3) Exit\n";
        $choice = trim(fgets(STDIN));

        switch ($choice) {
            case 1:
                Product::getProductList();
                echo "\nSelect a product by POSITION: ";
                $productPosition = trim(fgets(STDIN));

                echo "\nSelect Quantity: ";
                $quantity = trim(fgets(STDIN));
                

                break;
            case 2:
                $shoppingCart->calculateTotal();
                break;
            case 3:
                echo "Exiting shopping cart.";
                break;
            default:
                echo "Invalid option";
                break;
        }
    }
};
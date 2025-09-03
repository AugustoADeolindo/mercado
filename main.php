<?php
require_once './Product.php';
require_once './ShoppingCart.php';
require_once './Costumer.php';

function registerCostumer(): Costumer
{
    echo "Name: ";
    $name = trim(fgets(STDIN));
    echo "\nCPF: ";
    $cpf = trim(fgets(STDIN));

    $costumer = new Costumer(
        name: $name,
        cpf: $cpf
    );

    Costumer::addCostumer($costumer);
    echo "\nCostumer Registred!\n";
    
    return $costumer;
};

function registerProduct(): object
{

    echo "Name: ";
    $name = trim(fgets(STDIN));
    echo "\nPrice: ";
    $price = trim(fgets(STDIN));
    echo "\nQuantity: ";
    $quantity = trim(fgets(STDIN));
    echo "\nDescription: ";
    $description = trim(fgets(STDIN));

    $product = new Product(
        name: $name,
        price: $price,
        stock: $quantity,
        description: $description
    );

    echo "\nProduct Registred!\n";

    return $product;
};

function testShoppingCart(): void
{
    $choice = 0;
    
    $shoppingCart = new ShoppingCart();

    while ($choice != 3) {

        echo "\nSHOPPING CART";
        echo "\n(1) Add a item to your cart\n";
        echo "(2) Finish shopping\n";
        $choice = trim(fgets(STDIN));

        switch ($choice) {
            case 1:
                $product = registerProduct();
                $shoppingCart->addItem(
                    product:$product,
                    quantity: $product->stock
                );
                
                echo "\nQuantity: ";
                $quantity = trim(fgets(STDIN));

                break;
            case 2:
                $shoppingCart->calculateTotal();
                break;
            default:
                echo "Invalid option";
                break;
        }
    }
}

class Main
{
    public $choice = 0;

    public function run(): void
    {
        while ($this->choice != 4) {

            echo "\nHIPER MARKET";
            echo "\n(1) Add a costumer\n";
            echo "(2) Add a product\n";
            echo "(3) Purchase with ShoopingCart\n";
            echo "(4) Exit\n";
            $choice = trim(fgets(STDIN));

            switch ($choice) {
                case 1:
                    registerCostumer();
                    break;
                case 2:
                    registerProduct();
                    break;
                case 3:
                    testShoppingCart();
                    break;
                case 4:
                    exit("Leaving...");
                    break;
                default:
                    echo "Invalid option";
                    break;
            }
        };
    }
}


$main = new Main();
$main->run();
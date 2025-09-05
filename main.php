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

function testShoppingCart(): void
{
    $choice = 0;

    Costumer::getCostumers();
    echo "Select a costumer by POSITION: ";
    $costumerPosition = trim(fgets(STDIN));

     $shoppingCart = new ShoppingCart();

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

                $shoppingCart->addItem(Product::$list[$productPosition], $quantity);

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

class Main
{
    public $choice = 0;

    public function run(): void
    {
        while ($this->choice != 5) {

            echo "\nHIPER MARKET";
            echo "\n(1) Add a costumer\n";
            //echo "(2) Add a product\n";
            echo "(3) Purchase with ShoopingCart\n";
            echo "(4) Costumers Cadastred\n";
            echo "(5) Exit\n";
            $choice = trim(fgets(STDIN));

            switch ($choice) {
                case 1:
                    registerCostumer();
                    break;
                case 2:
                    //registerProduct();
                    break;
                case 3:
                    testShoppingCart();
                    break;
                case 4:
                    if (empty(Costumer::$costumers)) {
                        echo "\nNo costumers registred!\n";
                        break;
                    }else{
                        Costumer::getCostumers();
                    }
                    break;
                case 5:
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
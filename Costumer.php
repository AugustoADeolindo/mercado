<?php
require_once './ShoppingCart.php';

class Costumer
{
    public static array $costumers = [];

    public function __construct(
        private string $name,
        private string $cpf
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getCpf(): string
    {
        return $this->cpf;
    }
    
    public static function addCostumer(Costumer $costumer){
        self::$costumers[] = $costumer;
    }

    public static function getCostumers(): void {
        echo "\nCOSTUMERS LIST\n";
        foreach(Costumer::$costumers as $index => $costumer){
            echo "({$index})Name: " . $costumer->getName() . " | CPF: " . $costumer->getCpf() . "\n";
        }
    }
}

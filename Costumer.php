<?php
require_once './ShoppingCart.php';

class Costumer extends ShoppingCart
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
}

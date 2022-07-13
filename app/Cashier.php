<?php

namespace App;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Cashier
{
    public static function cashier(array $groceries):float{
        $price = 0;
        foreach ($groceries as $grocery){
            $price += ($grocery->getPrice() * $grocery->getQuantity());
        }
        return $price;
    }
}

class Grocery{
    private string $product;
    private int $quantity;
    private float $price;

    /**
     * @param string $product
     * @param int $quantity
     * @param float $price
     */
    public function __construct(string $product, int $quantity, float $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

}
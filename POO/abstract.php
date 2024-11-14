<?php
$beer = new Beer("poker", 15);
echo $beer ->getName();
showInfo($beer);
function showInfo(Product $product)
{
    echo "$ " .$product->calculatePrice();
}
abstract class Product
{
    protected $price;
    protected $name;
    abstract public function calculatePrice(): float;

    public function getName(): string
    {
        return $this -> name;
    }
}
class Beer extends Product
{
    const TAX = 1.1;
    public  function __construct($name, $price)
    {
        $this -> name = $name;
        $this -> price = $price;
    }
    public function calculatePrice(): float
    {
        return $this->price* self::TAX;
    }
}
<?php
class Discount
{
    protected $discount;
    public function __construct($discount)
    {
        $this->discount=$discount;
    }
    public function getDiscount($price)
    {
        echo "Se aplica un descuento del: ";
        return $price * $this->discount;
    }
}
class SpecialDiscount extends Discount
{
    const SPECIAL_DISCOUNT =2;
    public function getDiscount($price)
    {
        echo "se aplica un descuento especial <br>";
        return $price * $this->discount * self::SPECIAL_DISCOUNT;
    }
}
$discount = new SpecialDiscount(0.1);
$discountMont = $discount->getDiscount(100);
echo $discountMont;
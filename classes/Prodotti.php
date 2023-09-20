<?php
class Prodotti
{
    protected $title;
    protected $brand;
    protected $price;

    // rendo obbligatorie il title e il price
    public function __construct($_title, $_brand, $_price,)
    {
        $this->title = $_title;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}

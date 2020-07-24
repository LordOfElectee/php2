<?php
class Good
{
    public $name;
    public $price;
    public $weight;
    public $length;
    public $width;
    public $height;
    public $discount;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function countSize() {
        return $this->weight * $this->height * $this->length;
    }

    public function getDiscount() {
        $this->price *= $this->discount;
    }
}

class ElectroGood extends Good
{
    protected $voltage;
    
    public function __construct($name, $price, $voltage){
        parent::__construct($name, $price);
        $this->voltage = $voltage;
    }
}
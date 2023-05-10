<?php
    class Product{

    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount){
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price + ($this->price * 0.10);
    }

    public function getDiscountM(){
        return $this->discount + 0.05; 
    }

    public function GetDiscountR(){
        return $this->discount > 0;
    }
}
?>
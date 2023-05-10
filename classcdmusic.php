<?php
    class CDMusic extends Product{

      private $capacity;
      private $model;
  
      public function __construct($name, $price, $discount, $model){
          parent::__construct($name, $price, $discount);
          $this->model = $model;
      }
  
      public function getModel(){
          return $this->model;
      }
  
      public function calculatePrice(){
          $price = $this->getPrice();
          $price += $price * 0.1;
  
          return $price;
      }
  
      public function calculateDiscount(){
          $discount = $this->getDiscountM();
          $discount += 0.05; 
  
          return $discount;
      }
  
      public function calculateTotalPrice(){
          $price = $this->calculatePrice();
          $discount = $this->calculateDiscount();
          $totalPrice = $price - ($price * $discount);
  
          return $totalPrice;
      }
  }
  
  ?>
  
  
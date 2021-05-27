<?php

// First exercise

class Beverage {
     // Properties
   var string $color;
   var float $price;
   var string $temperature = 'cold';

   public function __construct(string $color, float $price, string $temperature = "cold") {
       $this->color = $color;
       $this->price = $price;
       $this->temperature = $temperature;
   }
     // Methods

   public function getInfo() {
         return "This beverage is " . $this->temperature . " and is " . $this->color . " " ;
     }
 }

 $cola = new Beverage("black", 2);

 echo $cola->getInfo().PHP_EOL;





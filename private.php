<?php

// Third exercise

class Beverage {
    // Properties
    private string $color;
    private float $price;
    private string $temperature = 'cold';

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    // Methods

    public function getInfo() {
        return "This beverage is " . $this->temperature . " and is " . $this->color . " " ;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

/*$cola = new Beverage("black", 2);

echo $cola->getInfo().PHP_EOL;*/

class Beer extends Beverage {
   private string $name;
   private float $alcoholpercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = "cold") {
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
        parent::__construct($color, $price, $temperature);
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage . "%";
    }


    public function getName(): string
    {
        return $this->name;
    }
    public function getInfo() {
        return parent::getInfo() . "and has a " . $this->alcoholpercentage  . "% alcohol"; // TODO: Change the autogenerated stub
    }

    public function beerInfo()
    {
        return "Hi i'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholpercentage . " and I have a " . $this->getColor() . " color.";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);


$duvel->setColor("light");
echo $duvel->getInfo();
echo "<br>";
echo $duvel->beerInfo();


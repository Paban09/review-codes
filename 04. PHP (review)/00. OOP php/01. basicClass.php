
<?php

class Car{

    //public is a access modifier
    public $name,$color,$price;//properties

    //method
    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }

    function getColor(){
        return $this->color;
    }
}

$car1=new Car(); //creating an object of a Car class

//initializing value
$car1->name="Lamborgini";
$car1->color="Black";
$car1->price=100000;

//accessing value
echo "<hr>"."<br>";
echo $car1->getName();
echo "<hr>"."<br>";

echo $car1->getColor();
echo "<hr>"."<br>";

echo $car1->getPrice();
echo "<hr>"."<br>"."<br>";


?>
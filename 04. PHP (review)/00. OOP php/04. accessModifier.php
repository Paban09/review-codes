<?php

class A{

    public $name; //can be access from anywhere
    protected $age; //can be access from derive class
    private $property; //can be access with in only this class

    function __construct($n="None"){
        echo "This is A class constructor"."<br>";
        $this->name=$n;
    }

    public function setProperty($p="None"){
        $this->property=$p;
    }

    public function getProperty(){
       echo $this->property."<br>";
    }

}

class B extends A{

    public function getName(){
        echo $this->name."<br>" ;
    }

    public function setAge($a="no age"){
        $this->age=$a;
    }

    public function getAge(){
        echo $this->age."<br>";
    }
}

//public
$child1=new B;
$child1->getName(); //none
$child1->name="Paban";
$child1->getName(); //Paban


$child2=new B("no name");
$child2->getName(); //no name
$child2->name="Ayan";
$child2->getName(); //Ayan

//protected
$parent1=new A;
$parent1->name="Moksed";
echo $parent1->name."<br>";
// $parent1->age=25;
// echo $parent1->age."<br>"; //can not be accessed protedted property like that

$child3=new B;
$child3->setAge(99);
$child3->getAge();



//private
$parent1->setProperty(1000);
$parent1->getProperty();
$child3->setProperty(2000);
$child3->getProperty();

?>

<?php

class Person{
    //if ecery properties and function are static then it becomes the static class
    public static $name,$asset;
    public $age;

    public function __construct(){
        echo "This is constructor of Person."."<br>";

    }
    
    public static function setName($n="none"){
        //$this->name, defines object
        self::$name=$n;
    }

    public static function getName(){
        echo self::$name."<br>";
    }


    public function setAge($a="0"){
        
        $this->age=$a;
    }

    public function getAge(){
        echo $this->age."<br>";
    }
}

//using properties and method without creating a object
Person::setName("Paban");
Person::getName();

echo "After static member."."<br>";

$child1=new Person;
$child1->setAge(25);
$child1->getAge();


class Personal extends Person{

    public function __construct(){
        echo "This is constructor of Personal."."<br>";
    }

    public function setAsset($a){
        //using parents static properties
        parent::$asset=$a;
    }

    public function getAsset(){
        
        echo parent::$asset."<br>";
    }
}

$child2=new Personal;
Personal::setName("Ayan");
Personal::getName();
$child2->setAge(29);
$child2->getAge();
$child2->setAsset(1000);
$child2->getAsset();


?>
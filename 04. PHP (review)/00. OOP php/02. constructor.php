<?php


class Person{
    public $name,$age,$profession;
    
    function __construct($p="Unemployeed"){
        echo "Constructor Has Called"."<br>";
        $this->profession=$p;
    }

    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age; 
    }

    function getProfession(){
        return $this->profession; 
    }

}

$student1=new Person("student");
echo $student1->getProfession()."<br>";

$student1->name="Paban";
echo $student1->getName()."<br>";


?>
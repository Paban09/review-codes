<?php

abstract class A{
    private $name,$age,$property;

    abstract protected function getValue();//have to declare empty abstract method

    protected function setName($n="none"){
        $this->name=$n;
        echo "Name value set"."<br>";

    }
    protected function setAge($n="none"){
        $this->age=$n;
        echo "Age value set"."<br>";
    }
    protected function setProperty($n="none"){
        $this->property=$n;
        echo "Property value set"."<br>";

    }

    protected function getValues(){
        echo $this->name;
    }
}

class B extends A{
    public function __construct($n,$a,$p){
        echo "Child Constructor Called"."<br>";
        $this->setName($n);
        $this->setAge($a);
        $this->setProperty($p);
    }

    //have to execute the empty abstract method
    public function getValue(){
        $this->getValues();
    }
    
}

$child1=new B("Paban",25,2000);
$child1->getValue();

// $parent1=new A; //can't create an object of an abstract class

?>
<?php

trait Hi{
    public $name;
    public function sayHi(){
        echo "Hi from trait 1. <br>";
    }
}

trait Hello{
    public function sayHello(){
        echo "Hello from trait 2. <br>";
    }
}

class Man{
    use Hi;
}
class Person{
    use Hi,Hello;
}

$child1=new Man;
$child1->sayHi(); //trait1
$child1->name="Paban";
echo $child1->name."<br>";



$child2=new Person;
$child2->sayHi(); //trait2
$child2->sayHello();


?>
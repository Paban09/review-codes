<?php

interface A{

    // private $a; //interfaces can not have properties
    function hello($n); //methods inside interface works as abstract method
}

interface B{
    function hi($n);
    function bye(); // by default access modifier is private
}

class C implements A,B{

    //have to implement the methods of interface in derive class
    public function hello($n){
        echo "Hello ".$n."<br>";
    }

    public function hi($n){
        echo "Hi ".$n."<br>";
    }

    public function bye(){
        echo "Bye everyone"."<br>";
    }
}

$child1=new C;
$child1->hello("Paban");
$child1->hi("Paban");
$child1->bye();

?>
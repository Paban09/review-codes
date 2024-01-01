<?php

class Man{
    public $name="Masud";
    public function show(){
        echo $this->name."<br>";//Masud
    }
}
class Person extends Man{
    public $name="Paban";
    public function show(){
        echo $this->name."<br>";//Paban
    }
}

$child1=new Man;
echo $child1->name."<br>";//Masud
$child1->show();

$child2=new Person;
echo $child2->name."<br>";//Paban
$child2->show();



?>
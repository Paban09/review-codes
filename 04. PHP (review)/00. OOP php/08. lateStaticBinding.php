<?php

class Base{
    protected static $name="Masud";
    public static function show(){
        // echo self::$name;
        echo static::$name."<br>";
    }
}

class Derive extends Base{
    public static $name="Paban";
    
}
//from derive class
$child1=new Derive;
$child1->show(); //Paban

//from parent class
Base::show();
$child2=new Base;//masud
$child2->show();//masud
?>
<?php

class Hello{
    public function sayHello(){
        echo "Hello everyone. <br>";
    }
}

class Bye{
    public function sayBye(){
        echo "Bye everyone. <br>";
    }
}

function hello(Hello $c){
    $c->sayHello();
}

$child=new Hello;
hello($child);


?>
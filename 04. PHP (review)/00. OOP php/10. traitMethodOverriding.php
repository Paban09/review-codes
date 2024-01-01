<?php 

trait Hi{
    public function sayHi(){
        echo "Say hi from Hi trait. <br>";
    }
}

trait Hello{
    public function sayHi(){
        echo "Say hi from Hello trait. <br>";
    }
}

trait Bye{
    private function sayBye(){
        echo "Say Bye from Bye trait. <br>";
    }
}

class Man{
    
    public function sayHi(){
        echo "Say hi from Man class. <br>";
    }
}

class Person extends Man{
    use Hi,Hello{
        Hi::sayHi insteadOf Hello; //Priotising one over other to remove error
        Hello::sayHi as newHi; //renaming the function to use it as well
    }
    use Bye{
        Bye::sayBye as public; //changing access modifier
    }
    // public function sayHi(){
    //     echo "Say hi from Person class. <br>";
    // }
}

$child1=new person;
$child1->sayHi();
$child1->newHi();
$child1->sayBye();

?>
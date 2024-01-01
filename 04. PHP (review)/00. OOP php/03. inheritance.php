<?php
 
class ParentF{
    public $p_name, $p_age, $p_property;

    function __construct($n="NO Name",$a="No Age",$p="NO property"){
        echo "this is Parent's constructor"."<br>";
        $this->p_name=$n;
        $this->p_age=$a;
        $this->p_property=$p;
    }

    function getProperty(){
        echo $this->p_property."<br>";
    }
}


class Child extends ParentF{
    public $name, $age;

    // function __construct($n="NO Name",$a="No Age"){
    //     echo "this is Child's constructor"."<br>";
    //     $this->name=$n;
    //     $this->age=$a;
        
    // }
    function getCName(){
        echo $this->name;
    }

}

$child1=new Child();
$child1->name="Paban";
echo $child1->p_name."<br>";
echo $child1->p_age."<br>";
echo $child1->p_property."<br>";
echo $child1->getProperty();
echo $child1->getCName();


// $child2=new Child("Paban",25);
// $child2->p_property="100000";
// echo $child2->p_property."<br>";


?>
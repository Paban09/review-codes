
<?php
echo "<br>"."<hr>";
echo "<h1>PHP</h1>";
echo "<hr>";

echo "<b>Arithmatic function</b>"."<br>"."<br>";

$a=12;
echo "Variable a is ="." ".$a."<br>";
$b=22;
echo "Variable b is ="." ".$b."<br>";
$c=4;
echo "Variable c is ="." ".$c."<br>";

$d=sum($a,$b);
echo "The sum of a,b is"." ".$d."<br>";

$e=sub($a,$c);
echo "The subtruction of a,c is"." ".$e."<br>";

$f=mul($a,$c);
echo "The multiplication of a,c is"." ".$f."<br>";

$g=div($a,$c);
echo "The division of a,c is"." ".$g."<br>";

$h=reminder($a,$c);
echo "The reminder of a,c is"." ".$h."<br>";


function sum($x,$y){
	$z=$x+$y;
	return $z;
}

function sub($x,$y){
	$z=$x-$y;
	return $z;
}

function mul($x,$y){
	$z=$x*$y;
	return $z;
}

function div($x,$y){
	$z=$x/$y;
	return $z;
}

function reminder($x,$y){
	$z=$x%$y;
	return $z;
}


echo "<br>"."<hr>";
echo "<b>Else If</b>"."<br>"."<br>";
$age=18;
if($age>=18){
	if($age==18){
		echo "New Adult, "."age = ".$age."<br>"."<hr>";
	}else{
		echo "Adult, "."age = ".$age."<br>"."<hr>";
	}
}else{
	echo "Kid, "."age = ".$age."<br>"."<hr>";
}


echo "<b>Logical and Conditional Operator</b>"."<br>"."<br>";
//In Php value 0 define as false and value 1 define as True

$a=1; //True (value of 1)
$b=0; //False (value of 0)
$d=0;
$x=!$b; // ! define as not to complment


$c = $a && $b; //and (duitai true hote hobe)
var_dump($c); //bool(false)
echo "<br>";

$e = $b || $a; //and (ekta true holei hobe)
var_dump($e); //bool(true)
echo "<br>";


$y = $a && $x; //and (duitai true hote hobe)
var_dump($y); //bool(true)
echo "<br>";

echo "<br>"."<hr>";



echo "<b>Array</b>"."<br>"."<br>";

$arr1=array("car1","car2","car3","car4"); //linear array

echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "<br>";

echo "<pre>";
var_dump($arr1);
echo "</pre>";

echo "<br>"."element of first index : ".$arr1[0]."<br>";

//associate array
$arr2=array(
	'name'=>'Paban',
	'age'=>25,
	'profession'=>'unemployed'
);
echo "<pre>";
print_r($arr2);
echo "</pre>"."<br>";
echo "Name of the array 2 = ".$arr2['name']."<br>";


echo "<hr>";

echo "<b>Loop</b>"."<br>"."<br>"; //loop
echo "<br>";
echo "For Loop"."<br>";
$x=sizeof($arr1);
echo "length of array : ".$x."<br>";

for($i=0; $i<$x; $i++){
	echo "element of first index ".$i." : ".$arr1[$i]."<br>";
}
echo "<br>"."<br>";
echo "Foreach Loop"."<br>";

$subjects=array(
	0 =>'Bangla',
	1 =>'English',
	2 =>'Physics',
	3 =>'Math'
);

foreach($subjects as $subject=>$x){
	echo "Subject = ".$x." ,";
}

echo "<br>"."<hr>";


echo "<b>Function of Array</b>"."<br>"."<br>"; //function of array
$car=array(
	0 =>'Car1',
	1 =>'Car2',
	2 =>'Car3',
	3 =>'Car4'
);

var_dump(is_array($car));
echo "<br>"."<hr>";

echo "<b>Break</b>"."<br>"."<br>"; //break

$x=10;
for($i=1;$i<=$x;$i++){
	
	$z=($x/$i);
	echo "value of i = " .$i."<br>";

	if($i==$x){
		break;
	};
	echo $z."<br>";
}

echo "<br>"."<hr>";
echo "<b>Continue</b>"."<br>"."<br>"; //continue

$x=10;
for($i=1;$i<=$x;$i++){
	$y=5;
	$z=($x/$i);
	echo "value of i = " .$i."<br>";
	if($i==$y){
		continue;		
	};
	echo $z."<br>";
	
}

echo "<br>"."<hr>";

echo "<b>Switch Case</b>"."<br>"."<br>"; //Switch case

$temp=2;
switch($temp){
	case ($temp<0):
		echo "Temperature is very cold";
		break;
	case($temp>0 && $temp<24):
		echo "Temperature is cold";
		break;
	default :
		echo "Temperature is very hot";
		break;
}
echo "<br>"."<hr>";

?>


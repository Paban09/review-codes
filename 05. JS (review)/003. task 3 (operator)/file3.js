var num1="2";
var num2=2;

console.log(num1==num2); //true - (only cheaking value)
console.log(num1===num2); //false - (cheaking type as well)
console.log(num1!=num2); //false - cheaking value
console.log(num1!==num2); // ture cheaking type as well


var x=21;

if(x%2==0){
    console.log("even");
}else{
    console.log("odd");
}

//ternary operator
var age=21;
var drink=age>=18?"coffe":"milk";
console.log(drink);

//and, or operator

var firstName="Masud";
var lastName="Paban";
// var lastname=prompt("Enter your name :",);
// console.log(lastname);


//and operator - both are true
if(age>=18 && firstName[0]==="M"){
    console.log("You are eligable");
}else{
    console.log("You are not eligable");
}

//or - even one is true

if(age>=18 || lastName[0]==="M"){
    console.log("You are eligable too");
}else{
    console.log("You are also not eligable");
}

//falsy ('',null,undefined,false,0)
var fName="";
console.log(typeof(fName));

if(fName){
    console.log(fName);
}else{
    console.log("variable is empty");
}

//nested if-else

let winningNumber=Number(prompt('Guess a number : ',));
console.log(winningNumber);
console.log(typeof winningNumber);
 
if(winningNumber>18){
    if(winningNumber<=99){
        console.log("Number is perfect");
    }else{
        console.log("Number is too high");
    }
}else{
    console.log("Number is too low");
}


//switch case

let temp=Number(prompt("Enter the temperature :"));


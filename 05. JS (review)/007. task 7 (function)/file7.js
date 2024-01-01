"use strict";

// function 
function greet(){
    console.log('Hello everyone');
}
greet();



// parameterize function
function sum(a,b){
    console.log(a+b);
}
sum(2,3);

function sub(a,b){
    var c=a-b;
    return c;
}
var result=sub(2,3);
console.log(result);


//using default value 
function div(a,b=1){
    var c=a/b;
    return c;
}
var result=div(2,5);
console.log(result);

//function expression
//here function is known as anonymous function
//and the returned value stored in a variable
let returnedValue= function (){
    console.log('function expression');
}
returnedValue(); //calling function

//arrow function
let arrow = (x)=>{
    console.log(`arrow expression, ${x}`);
}
arrow("is good");



//callback function
//callback function take function as parameter
function func1(){
    console.log("from function 1");
}

function func2(func){
    func();//executing the func1
}
//taking func1 as a parameter
func2(func1);




//function returns function
function myFunc(){
    function hello(){
        return 'hello';
    };
    return hello; //retuning the hello function
}

let hi = myFunc(); //function stored in variable and become func
console.log(hi);
console.log(hi());

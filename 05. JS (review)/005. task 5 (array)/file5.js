//array is a referanced type
var fruits=['apple','banana','cabage'];

console.log(typeof(a));
console.log(fruits);
console.log(fruits[2]); //accessing using index

//push and pop are faster

//enters last
fruits.push('dadrio');
console.log(fruits);


//enters first
fruits.unshift("jackfruit");
console.log(fruits);

//removes from last 
var x=(fruits.pop());
console.log(fruits);
console.log(x);


//removes from first
var y=(fruits.shift());
console.log(fruits);
console.log(y);


//clone or copy a array
let array1=['item1','item2'];
let array2=['item3','item4'];

//using slice
let array3=array1.slice(0);
console.log(array3);

//using concat
let array4=[].concat(array1);
console.log(array4);

// using spreaad operator
let array5=[...array1];
console.log(array5);

    
//Adding or concating a array
//using slice
let flowers=['rose','belly','sunflower'];
let farray1=flowers.slice(0).concat("hela");
console.log(farray1);
console.log(flowers);

//using concat
let farray2=[].concat(flowers,["hela","bela"],array1)
console.log(farray2);
console.log(flowers);

//using spread
let farray3 =[...flowers,...array1];
console.log(farray3);
console.log(flowers);


//array destructuring
let myarray=['value1','value2'];
var key1=myarray[0];
var key2=myarray[1];
console.log("value of key1 = ",key1);
console.log("value of key2 = ",key2);

//shortcut of array destructuring
let myArray=['value1','value2','value3','value4'];
let [myvar1,myvar2]=myArray;
console.log("value of myvar1 = ",myvar1);
console.log("value of myvar2 = ",myvar2);

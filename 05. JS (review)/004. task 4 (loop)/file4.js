//for loop
console.log("For Loop");
for(let i=0;i<=5;i++){   
    console.log(i);
}

//while
console.log("While Loop");
var i=0;
while(i<=5){
    console.log(i);
    i++;
}

//do while //executes firt then cheak
console.log("do-while Loop");
var i=0;
do{
    console.log(i);
    i++;
}while(i<=5);


//for loop in array
let fruit=['mango','apple','banana'];
console.log("lenth of array ",fruit.length);

for(let i=0;i<fruit.length;i++){
    console.log(fruit[i]);
}

//while loop in array
var i=0;
while(i<fruit.length){
    console.log(fruit[i]);
    i++;
}

//do while loop in array
var i=0;
do{
    console.log(fruit[i]);
    i++;
}while(i<fruit.length);

//for of loop in array
let flowers=['rose','beli','sunflower']; 
for (let flower of flowers){
    console.log(flower);
}

//for in loop in array
for (let i in flowers){
    console.log(flowers[i]);
}
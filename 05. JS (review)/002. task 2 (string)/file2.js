console.log('strings');

let firstName = "masud";

//index start with 0
// m a s u d = value
// 0 1 2 3 4 = index

console.log(firstName[1]); //a
console.log(firstName[2]); //s

//length starts with 1
console.log(firstName.length); //5 

let lastName="   Nibir   ";
console.log(lastName.length);

console.log(lastName);
console.log(lastName.trim()); //nibir
console.log(lastName.length); //immuteable
let x =lastName.trim(); //assigning into new variable
console.log(x);
console.log(x.length);

console.log(x.slice(1));//ibir
console.log(x.slice(2,4)); //bi
console.log(x);
console.log(typeof(x)); //data type string

let age=18;
console.log(typeof(age));
age=String(age);
console.log(typeof(age)); //convert number to string

let newAge="25";
console.log(typeof(newAge));
newAge=Number(newAge);//convert string to number
console.log(typeof(newAge));


//string concatenation 
let string1="Masud";
let string2="Rana";

let string3= string1+" "+string2;
console.log(string3);

//templte string
// let aboutMe="My name is "+string3+" and my age is "+age;
let aboutMe=`My name is ${string3} and my age is ${age}`;
console.log(aboutMe);





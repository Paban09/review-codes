//foreach method

const numbers=[2,5,6,7,10,11,14];

// v=value,k=key
numbers.forEach(function(v,k){
    console.log(`Key is ${k} and value is ${v}`);
});


var users=[
    {'userId':1,'name':'Masud'},
    {'userId':2,'name':'Rana'},
    {'userId':3,'name':'Paban'},
];

// users.forEach(()=>{});
users.forEach(function(v,k){
    console.log(`index is ${k} and user Name is ${v.name}`);
   
}); 


//map method
// const numbers=[2,5,6,7,10,11,14];
//return new array and pushes value into it
let square =numbers.map((v,k)=>{
   return `index is ${k}, value is ${v} and square is ${v*v}`;
});
console.log(square);



//filter method
// const numbers=[2,5,6,7,10,11,14];
//return new array and pushes value into it
//returns true or false
//pushes into array if value is true
let evenNumber=numbers.filter((v,k)=>{
    return v%2===0;
});
console.log(evenNumber);



//reduce method
// const numbers=[2,5,6,7,10,11,14];
let sum=numbers.reduce((accumulator,current)=>{
    return accumulator+current;
},0); //initial value is 0
console.log(sum);

//sort method
//changes the original array
// const numbers=[2,5,6,7,10,11,14];
numbers.sort((a,b)=>{
    return b-a; //descending order
});
console.log(numbers);


//find method
// var users=[
//     {'userId':1,'name':'Masud'},
//     {'userId':2,'name':'Rana'},
//     {'userId':3,'name':'Paban'},
// ];

var myUser=users.find((user)=>{
    return user.userId===3;
});
console.log(myUser);



//this keyword

function getPersonInfo(){
    console.log(`Name is ${this.name}`);
}

let person1={
    'id':1,
    'name':'Masud',
    'age':26,
    'address':{'area':'Kerniganj','post':'1222'},
    'about': getPersonInfo            
}

let person2={
    'id':2,
    'name':'Rana',
    'age':27,
    'address':{'area':'Dhaka','post':'1332'},
    'about': getPersonInfo
}

person1.about();
person2.about();


// 'use strict';

let user1={
    'name':'Masud',
    'age':26,
    'address':function(university,area){
        console.log(`${this.name} lives in Dhaka, whose age is ${this.age} and studies in ${university} which is in ${area}`);
    }        
};

let user2={
    'name':'Rana',
    'age':29,       
};

let user3={
    'name':'Paban',
    'age':20,       
};

let user4={
    'name':'Ayan',
    'age':22,       
};

// user1.address();
user1.address("AIUB","Barisal");

//call
// user1.address.call(user2);//using the func of user1 
//sending its own value using parameter 
user1.address.call(user2,"BRAC","Cumilla");


//apply
//apply works like call and internally it uses call
// user1.address.apply(user3,["IUBAT","Chittagong"]);

//can send value as a array
let arr=["IUBAT","Chittagong"];
user1.address.apply(user3,arr);


//bind
//bind returns a function
let use3Add=user1.address.bind(user4,"SUSTA","Noalkali");
// console.log(user1.address.bind(user3,"SUSTA","Noalkali"));
use3Add(); //using the returned function



// console.log(window);
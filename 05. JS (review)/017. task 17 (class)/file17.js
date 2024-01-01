"use strict";
function createUser(name,age){
    this.name=name;
    this.age=age;   
} 

createUser.prototype.about= function(){
    return `${this.name}`;
}

createUser.prototype.is18=function(){
    return this.age>=18;
}

let user1= new createUser('Masud',20);  
console.log(user1);
console.log(user1.about());


////////////////////////////////////////////////////////////////


// class
class User{
    constructor(name,age){
        this.name=name;
        this.age=age; 
    }

    about(){
        console.log(`User class obj name is ${this.name}`);
    }

    is18(){
        console.log(this.age>=18);
    }

}

let user2= new User('Paban',99);  
console.log(user2.name);
user2.about();
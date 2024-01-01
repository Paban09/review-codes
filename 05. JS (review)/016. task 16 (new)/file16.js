
//new keyword

function createUsers(name,age){
    this.firstName=name;
    this.age=age;
}

// const user1= createUser('Masud',20); //undefined

// 3 task done by new keyword
// 1. create empty object, this refers to empty object
// 2. returns this
// 3. this keyword will create the reference chaining by own
// proto = prototype , this will create by this keyword  
const user2=new createUsers('Masud',20);
console.log(user2);

//as the createUser is a function it has prototype {} obj
createUsers.prototype.about=function(){
    console.log(this.firstName,this.age);
}

// console.log(user2);


/////////////////////////////////////////////////////////////////

// function createUser(name,age){
//     const user=Object.create(createUser.prototype);
//     user.name=name;
//     user.age=age;
//     return user;
// }

function createUser(name,age){
    // const user=Object.create(createUser.prototype); // this will do this
    this.name=name;
    this.age=age;
    // return user; //this will return after assigning value
} 

// console.log(createUser.prototype)

createUser.prototype.about= function(){
    return `${this.name}`;
}

createUser.prototype.is18=function(){
    return this.age>=18;
}

// console.log(createUser.prototype)

let user1= new createUser('Paban',99);  
console.log(user1);
console.log(user1.about());
// console.log(user1.is18());
console.log(createUser.prototype);

createUser.prototype.hobby="singing";
console.log(createUser.prototype)





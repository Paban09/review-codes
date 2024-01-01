
function hello(){
    console.log('Hello world');
}

//js function= function + obj;
console.log(hello.name); //function name output
console.log(hello);

hello.myName='my name is pabon';
console.log(hello.myName); //adding key value pair in func
console.log(hello.prototype); //{} //free space



// only function provide prototype property 

function createUser(name,age){
    const user=Object.create(createUser.prototype);
    user.name=name;
    user.age=age;
    return user;
}

// console.log(createUser.prototype)

createUser.prototype.about= function(){
    return `${this.name}`;
}

createUser.prototype.is18=function(){
    return this.age>=18;
}

// console.log(createUser.prototype)

let user1= createUser('Masud',25);  
console.log(user1);
console.log(user1.about());
console.log(user1.is18());
console.log(createUser.prototype)

createUser.prototype.hobby="singing";
console.log(createUser.prototype)


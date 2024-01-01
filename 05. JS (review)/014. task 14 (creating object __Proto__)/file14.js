let obj1={
    'key1':'value1',
    'key2':'value2'
}

let obj2=Object.create(obj1);
console.log(obj2);

let obj3={};
console.log(obj3);

obj3.key1="value1";
console.log(obj3);



console.log(obj2.key2);




let userMethod={
    'is18':function(){
        return this.age>=18;
    },
    'about':function(){
        return `${this.name}`;
    }
};

function createUser(name,age){
    const user=Object.create(userMethod);
    user.name=name;
    user.age=age;
    return user;
}

let user1= createUser("Masud",18);
console.log(user1);
console.log(user1.about());
console.log(user1.is18());






let userMethod={
    'is18':function(){
        return this.age>=18;
    },
    'about':function(){
        return `${this.name}`;
    }
};


// let user={
//     'name':'Rana',
//     'age':29,       
// };

// let x = userMethod.is18.call(user);
// console.log(x);

function createUser(name,age){
    const user={};
    user.name=name;
    user.age=age;
    user.about=userMethod.about;//stored reference of the function
    user.is18=userMethod.is18;
    return user;
}

let user1= createUser("Masud",18);
console.log(user1);
console.log(user1.is18());
console.log(user1.about());


let person= new Map(); //creating map class object

person.set('name','Paban');
person.set('age','26');
console.log(person);
console.log(person.get('age'));
console.log(person.keys());


//uses for storing extra information of an obj but not in it
let person1= {
    'id':1,
    'name':'Masud',
    'age':'26'
};

console.log(person1);
let extraInfoP1=new Map();
extraInfoP1.set(person1,{'degree':'CSE','gender':'male'});
console.log(person1);
console.log(extraInfoP1.get(person1));
console.log(extraInfoP1.get(person1).degree);

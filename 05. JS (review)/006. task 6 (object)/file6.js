
var person ={
    name: 'Masud',
    age : 25
}

console.log(person);

//access data from object
console.log(person.name);
console.log(person.age);

//adding key and value
person.hobby="play guitar";
console.log(person);

//access data from object using bracket notation
console.log(person['name']);
console.log(person['age']);

//adding key and value using bracket notation
person['gender']='male';
console.log(person);

var key='email';
person[key]='masud@gmail.com';
console.log(person);

//iterate object using for in
for(var i in person){
    console.log(i,'=>',person[i]);
}

//iterate object using Object .
console.log(Object.keys(person)); //return keys

for(var key of Object.keys(person)){
    console.log(key,'=>',person[key]);
}

//computed properties
var key1='myvar1';
var key2='myvar2';

var value1='myvalue1';
var value2='myvalue2';

var obj={};
console.log(obj);
obj[key1]=value1;
obj[key2]=value2;
console.log(obj);

//spread operator for object
//copying object
var obj1={'key1':'value1','key2':'value2'};
var obj2={'key3':'value3','key4':'value4','key5':'value5'};

var newObj={...obj1,...obj2};
console.log(newObj);

//object destructering
var band = {
    name:'LRB',
    song:'Sei tumi',
    year:'2000',
    estd:'1990'
};

var { name,song, ...details} = band; //follow naming
console.log(name);
console.log(song);
console.log(details);


//objects in array
var users=[
    {'userId':1,'name':'Masud'},
    {'userId':2,'name':'Rana'},
    {'userId':3,'name':'Paban'},
];

for (var user of users){
    console.log(user);
}

//objects destructering
var [user1,user2,user3]=users;
console.log(user1);
console.log(user2);
console.log(user3);

// nested objects destructering

var [{name},nuser2,nuser3]=users;
console.log(name);
console.log(nuser2);
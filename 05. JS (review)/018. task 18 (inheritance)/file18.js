class Animal{
   constructor(name,age){
        console.log("base class constructor called");
        this.name=name;
        this.age=age;
    }

    details(){
        console.log(`${this.name} age is ${this.age}`);
    }
}

class Dog extends Animal{
    constructor(name,age,speed){
        console.log("Derive class dog constructor called");
        super(name,age);
        this.speed=speed;
    }

    run(){
        console.log(`${this.name} run in speed of ${this.speed}`);
    }
}

class Cat  extends Animal{
    constructor(name,age,food){
        console.log("Derive class cat constructor called");
        super(name,age);      
        this.food=food;
    }
}

let cat1=new Cat('pussy',2,'fish');
console.log(cat1);
cat1.details();

let dog1=new Dog('tommy',5,55);
console.log(dog1);
dog1.details();
dog1.run();
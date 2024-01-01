class Person{
    constructor(name,age){
        console.log("Person cons called");
        this.name=name;
        this.age=age;
    }

    static details(){
        console.log(`${this.name}`);
    }

    static gender="male";
}


// let person1= new Person('Paban',25);
// person1.details();
Person.details(); // calling static function
console.log(Person.gender); // printing static variable
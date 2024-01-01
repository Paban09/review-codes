class Person{
    constructor(firstName,lastName,age){
        console.log("Parent class constructor called");
        this.firstName=firstName;
        this.lastName=lastName;
        this.age=age;
    }

    set fullName(fullName){
        console.log("FullName method called");
        let [firstName,lastName]=fullName.split(" ");
        this.firstName=firstName;
        this.lastName=lastName;
    }
    get fullName(){
        return `${this.firstName} ${this.lastName}`;
    }
}

let person1= new Person('Masud','Rana',20);
console.log(person1.fullName); //getter
console.log(person1);

person1.fullName="Abu Haider";
console.log(person1.fullName); //getter
console.log(person1);


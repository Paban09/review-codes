
//set
var numbers=[10,20,30,10,20,30];
let set = new Set(numbers);
console.log(set);

set.add(1);//adding value into set
console.log(set);

set.delete(20); //deleting from set
console.log(set);

var check =set.has(1)//checking value 
console.log(check);

set.clear();//empty the set
console.log(set);



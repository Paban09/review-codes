
let todoList=document.querySelector('.todo-list');
console.log(todoList);
// console.log(todoList.innerHTML);
// todoList.innerHTML += "<li class='mt-3'>Hello Everyone</li>";
// todoList.innerHTML += "<li class='mt-3'>Hello Paban</li>";

//create new element
let newTodoItem=document.createElement('li');
let newTodoItemText=document.createTextNode('Hello Everyone');

// newTodoItem.appendChild(newTodoItemText);
newTodoItem.append(newTodoItemText);
todoList.append(newTodoItem);
console.log(newTodoItem);
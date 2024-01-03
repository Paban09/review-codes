// console.log(window);
// console.log(window.document); 





// select an element of a document by using ID
//this will return object
let mainHeading=document.getElementById('main-heading');
console.log(mainHeading);
// console.dir(mainHeading);
// console.log(typeof(mainHeading)); //object





//select an element of a document by using query selector
//query selector call target any element by class, id or tag
//to select an id have to use # before that
let learnMore=document.querySelector('#learn-more');
console.log(learnMore);
// console.dir(learnMore);
// console.log(typeof(learnMore));

//to select an class have to use . before that
let secondHeading=document.querySelector('.second-heading');
console.log(secondHeading);
// console.dir(secondHeading);
// console.log(typeof(secondHeading));

//this will return only the first element of that type
let navLink=document.querySelector('.nav-link');
console.log(navLink);
// console.dir(navLink);
// console.log(typeof(navLink));

//this will return all element of that type as Node-List
let navLink2=document.querySelectorAll('.nav-link');
console.log(navLink2);
// console.dir(navLink2);
// console.log(typeof(navLink2));





//change text
// let mainHeading=document.getElementById('main-heading');
console.log(typeof(mainHeading)); //object
//mainHeading.textContent will return content of the obj
console.log(mainHeading.textContent);
//changing the inner text of the obj
mainHeading.textContent="Create your Daily task";
//textContent will also return the hidden content
console.log(mainHeading.textContent);
//innerText will return only content not hidden one
console.log(mainHeading.innerText);






//change styles of element
// let mainHeading=document.getElementById('main-heading');
// console.log(mainHeading.style);
mainHeading.style.backgroundColor = "black";
mainHeading.style.border = "20px solid gray";





//get and set attribute

let link = document.querySelector('li.dropdown a.nav-link');
console.log(link);
//getAttribute is a method
console.log(link.getAttribute('class'));  

let inputElement=document.querySelector("form div div.col-sm-3 input");
console.log(inputElement);
console.log(inputElement.getAttribute('value'));  
//setting attribute
inputElement.setAttribute('value', 'Add Todo');
console.log(inputElement.getAttribute('value'));  








//get multiple elements using get element by class
let navItems= document.getElementsByClassName('nav-link');
console.log(navItems); //htmlCollection
let a=(navItems[0]);
console.log(a);
console.log(a.getAttribute('href'));
// console.log(a.innerHTML);
// console.log(a.textContent);
// a.textContent='home';
// a.innerHTML="<i><b>home</b></i>";

//can get multiple elements item using querySelectorAll
// let navLink2=document.querySelectorAll('.nav-link');
// console.log(navLink2); //nodeList











//iterate htmlCollection
//we can't use forEach loop to iterate html collection
//nodeList is array like object
// let navLink2=document.querySelectorAll('.nav-link');
// console.log(navLink2); //nodeList
// we can use all method in nodeList


// console.log(navLink2.length);
// console.log(navLink2);
// for(var i=0;i<navLink2.length;i++){
//     console.log(navLink2[i]);
// } 


// let navItems= document.getElementsByClassName('nav-link');
// console.log(navItems); //htmlCollection

for(let navItem of navItems){
    console.log(navItem);
} 


for(var i=0;i<navItems.length;i++){
    console.log(navItems[i]);
} 

//converting html collection to array
console.log(navItems);
console.log(Array.isArray(navItems));
navItems=Array.from(navItems);
console.log(navItems);
console.log(Array.isArray(navItems));


console.log("printing for each");
navItems.forEach(element => {
    console.log(element);
});











//innerHtml
let headline=document.querySelector('.headline');
console.log(headline);
console.log(headline.innerHTML);
// console.log(headline.innerText);

//changing the inner html or replacing
// headline.innerHTML="<h1>Hello</h1>";

//adding new thing with then previous one
//this will add content after the existing one 
headline.innerHTML+="<p class='text-white fw-bold text-center py-3'>Added the new content into the headline section</p>";









//tree traversing

let root = document.getRootNode();
console.log(root);
//checking the child nodes
console.log(root.childNodes);

let input= document.getElementById('inputForm');
console.log(input);
console.log(input.childNodes);

console.log(input.childNodes[1]);
console.log(input.childNodes[1].childNodes);

//parent traverse node
console.log(input.parentNode.parentNode);

//sibling traverse node
console.log(input.parentNode.nextSibling);
console.log(input.parentNode.nextElementSibling);


// input.parentNode.parentNode.style.backgroundColor="black";
console.log(input.parentNode.getAttribute('method'));



let newHeader=document.getElementById('main-heading');
console.log(newHeader);

console.log(newHeader.childNodes);
console.log(newHeader.parentNode);

console.log(newHeader.innerText);
newHeader.innerText='Manage Your Daily Task';
newHeader.innerHTML +="<p>Do it !!!</p>";

newHeader.style.color='red';


//to traverse into the particular child
// let input= document.getElementById('inputForm');
console.log(input.childNodes[1]);
// console.log(input.childNodes[1].childNodes);

console.log(input.childNodes[1].querySelector('input').getAttribute('placeholder'));
let text=(input.childNodes[1].querySelector('input'));
console.log(text);
text.setAttribute('placeholder','add what to do');
text.setAttribute('id','firstInput');
console.log(text);


console.log(input);
console.log(input.children[1].querySelector('input').getAttribute('value'));
let btn=(input.children[1].querySelector('input'));
btn.setAttribute('value','Add');










//add class using js
console.log(secondHeading);
console.log(secondHeading.classList);
secondHeading.classList.add('bg-primary');
secondHeading.classList.add('fw-bold');
console.log(secondHeading.classList);

//remove class using js
secondHeading.classList.remove('text-white');
console.log(secondHeading.classList);


//any class exist or not - returns true or false
secondHeading.classList.contains('bg-dark');

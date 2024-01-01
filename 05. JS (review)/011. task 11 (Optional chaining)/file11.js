
let person=[
    {'id':1,'name':'Masud','age':26,
        'address':{'area':'Kerniganj','post':'1222'}        
    },
    {'id':2,'name':'Rana','age':27,
        'address':{'area':'Dhaka','post':'1332'}
    },
    {'id':3,'name':'Paban','age':25},
];


person.forEach((user,index)=>{
    // console.log(index,user.address.area); //This will return error
    // console.log(user.id);
    console.log(index,user?.address?.area);
});


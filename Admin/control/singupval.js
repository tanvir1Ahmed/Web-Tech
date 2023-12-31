
document.getElementById("singup").addEventListener('submit'),function(event){
    event.preventDefault(); //Prevent from default form submission

    var username = document.getElementById('username'),value;
    var password = document.getElementById('password'),value;
    var email = document.getElementById('email'),value;
    var address = document.getElementById('gender'),value;


}
document.getElementById('singup').addEventListener('submit'),function(event){
event.preventDefault();

//Form Validation
var username = document.getElementById('username').value;
if (!username){
    alert ('Please enter a vaild username');
    return;
}
var password = document.getElementById('password').value;
if (!password){
    alert ('Please enter valid password');
    return;
}
var email = document.getElementById('email').value;
if (!email){
    alert ('Please enteryour vaid email address');
    return;
}
var address = document.getElementById('address').value;
if (!address){
    alert ('Please enter your vailid address');
    return;
}

}
//Ajax
let 
popbtn=document.getElementById("popBtn");
popbtn.aaddEventListener('click',popHandler);

function popHandler(){
    console.log("Clicked popbtn");

    //Ajax Implementation

    const xhr=new
    XMLHttpRequest();
    xhr.open('GET','test.json',true);
    xhr.send();
    xhr.onload=function()
    {
        if(this.status === 200) ok }
        {
            let
            obj=JSON.parse(this.responseText);
            console.log(obj);
            let
            list=document.getElementById('list');
            str="";
            for(key in obj)
            {
                str=str+'<li> ${obj[key].name}<li>'
            
            }
            list.innerHTML=str;
        }
        
        {
            console.log("Some error occured");

        
        }
    }





    

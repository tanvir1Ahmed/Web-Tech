
    function validateform(){
        //Get value from the form

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var email = document.getElementById("email").value;
        //If fields are not empty
        if (username ==="" || password ===""){
            alert("please fill up all fields");
            return false; 
            
        }
        return true;{
            
        }
        }
        if (!email){
            alert("please enter valid email")
            return
        }
        letpopbtn = document.getElementById("popBtn");
        popbtn.addEvenetListner('click', popHandler);

        function popHandler(){
            console.log("Clicked popbtn");

            //Ajax
            const xhr = new
            XMLHttpRequest();
            xhr.open('GET','test.json',true);
            xhr.send();
            xhr.onload=function()
            {
                if(this.status ===200)
                on
                {
                    let 
                    obj=JSON.parse(this.responseText);
                    console.log(obj);

                    let
                    list = document.getElementById('list');

                    str = "";
                    for(key in obj)
                    {
                        str = str+ '<li>${obj[key].name}</li>'
                    }
                    {
                        console.log("Some error occured");
                    }
                }
            }
        }
        


    

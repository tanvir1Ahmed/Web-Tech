<htm>
    <head>
        <script src ="../Controler/login.js">

        </script>
        <body>
            <div id="error-message"></div>

            <form id="box" action ="/myaction.php"name = "loginForm" onsubmit ="return validateForm()" method ="post">
             <div class ="formdesign" id ="name"></div>
            <lable for="username">Username:</lable>
           Name: <input type ="text" id= "username" name="username" required></input>

            <label for="password">Password:</label>
            Password:<input type="password" id="password" name ="password" required></input>
            
            <lable for="email">Email:</lable>
            Email:<input type="text" id="email" name="text" required></input>

            <button type="button" onclick="validateLogin()">Login</button>
           Submit: <input type="submit" value="Login"></input>
           
           </form>
           <div></div>
           <script src="../Controler/Login.js"></script>
           
        

        </body>
        
    </head>
</htm>


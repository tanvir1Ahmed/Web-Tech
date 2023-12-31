

<html>
    <head>
        
        <link rel="stylesheet" href="style.css"></link>
        <script src ="../Controler/Singup.js">

        </script>
    </head>
    <body>
        <div class="container"></div>
        <h1> Singup Form </h1>
        <form class id = "box" action="/ my action.php" name = "Singup" onsubmit = "return validate Form()" method ="post> singUP">
            <div class = "formdesign" id="name"></div>

            Name: <input type ="text" id ="username" required></input>
            Password:<input type ="password" id ="password" required ></input>
            Confirm Password:<input type="password" name ="fcpass" required></input>
            Email:<input type = "text" id = "email" required></input>
            <input type = "text" id = "address"></input>
            <input type = "radio" id ="gender" value ="male" required></input>
            <input type = "radio" id = "gender" value ="female" required></input>
            <input type = "radio" id = "gender" value ="other" required></input>

            <form action ="/submit" method = "_POST"></form>
            <input type = "submit" value ="Submit"></input>
        </form>
    </body>
</html>